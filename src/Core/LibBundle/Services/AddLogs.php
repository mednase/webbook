<?php

namespace Core\LibBundle\Services;

use Core\LibBundle\Entity\AdminLogs;
use Core\LibBundle\Entity\Logs;
use Doctrine\ORM\EntityManager;
use FOS\UserBundle\Model\UserInterface;

/**
 * Loggable listener
 *
 * @author Boussekeyt Jules <jules.boussekeyt@gmail.com>
 * @author Gediminas Morkevicius <gediminas.morkevicius@gmail.com>
 * @license MIT License (http://www.opensource.org/licenses/mit-license.php)
 */
class AddLogs
{
    /**
     * @var EntityManager
     */
    private $entityManager;

    /**
     * AddLogs constructor.
     * @param EntityManager $entityManager
     */
    public function __construct(EntityManager $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    public function createLog($cueillette, $user, $classEntity, $data)
    {
        $date = new \DateTime('now');
        $logs = new Logs();
        $logs->setUser($user);
        $logs->setData($data);
        $logs->setAction('update');
        $logs->setUsername($user->getFullName());
        $logs->setVersion($date->getTimestamp());
        $logs->setCueillette($cueillette);
        $logs->setObjectClass($classEntity);
        $logs->setLoggedAt($date);
        return $logs;
    }

    /**
     * @param $object
     * @param UserInterface $user
     * @param string $action
     * @param array $data
     *
     * dynamic persist and flush log.
     */
    public function createAdminLog($object, UserInterface $user, $action = 'create', $data = array(), $system = null)
    {
        if (is_object($object)) {
            $log = new AdminLogs();

            /**
             * set permission system
             */
            if (method_exists($object, 'getSystem')) {
                $log->setSystem($object->getSystem());
            } else {
                $log->setSystem($system);
            }

            $date = new \DateTime('now');
            $log->setLoggedAt($date);
            $log->setVersion($date->getTimestamp());
            $log->setUsername($user->getFullname());
            $log->setAction($action);

            $log->setObjectId($object->getId());
            $log->setObjectClass(get_class($object));

            if (empty($data)) {
                if (method_exists($object, '__toString')) {
                    $data = array(
                        'name' => $object->__toString()
                    );
                }
                if (method_exists($object, 'getName')) {
                    $data = array(
                        'name' => $object->getName()
                    );
                }
                if ($object instanceof UserInterface) {
                    $data = array(
                        'name' => $object->getFullname()
                    );
                }
                $data['id'] = $object->getId();
                $data['token'] = $object->getToken();
                $data['file'] = $object->administratorLogs()['translatorFile'];
                $data['message'] = $object->administratorLogs()['data'][$action];
                $data['module'] = $object->administratorLogs()['module'];
            }

            $log->setData($data);

            $this->entityManager->persist($log);
            $this->entityManager->flush();
        }
    }

}
