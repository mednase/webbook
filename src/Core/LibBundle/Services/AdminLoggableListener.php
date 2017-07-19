<?php

namespace Core\LibBundle\Services;

use Gedmo\Loggable\LoggableListener;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Gedmo\Loggable\Mapping\Event\LoggableAdapter;
use Gedmo\Tool\Wrapper\AbstractWrapper;

/**
 * Class AdminLoggableListener
 * @package Core\LibBundle\Services
 *
 * @author Mobelite <contact@mobelite.fr>
 */
class AdminLoggableListener extends LoggableListener
{
    /** construct function **/
    public function __construct(ContainerInterface $container)
    {
        parent::__construct();
        $this->container = $container;
    }

    protected function createLogEntry($action, $object, LoggableAdapter $ea)
    {
        $om = $ea->getObjectManager();
        $wrapped = AbstractWrapper::wrap($object, $om);
        $meta = $wrapped->getMetadata();

        // Filter embedded documents
        if (isset($meta->isEmbeddedDocument) && $meta->isEmbeddedDocument) {
            return;
        }

        if ($config = $this->getConfiguration($om, $meta->name)) {
            if ($this->username == null) {
                $logEntryClass = $this->getLogEntryClass($ea, $meta->name);
                $logEntryMeta = $om->getClassMetadata($logEntryClass);
                /** @var \Gedmo\Loggable\Entity\LogEntry $logEntry */
                $logEntry = $logEntryMeta->newInstance();

                $logEntry->setAction($action);
                $logEntry->setUsername($this->username);
                $logEntry->setObjectClass($meta->name);
                $logEntry->setLoggedAt();
                // check for the availability of the primary key
                $uow = $om->getUnitOfWork();
                if ($action === self::ACTION_CREATE && $ea->isPostInsertGenerator($meta)) {
                    $this->pendingLogEntryInserts[spl_object_hash($object)] = $logEntry;
                } else {
                    $logEntry->setObjectId($wrapped->getIdentifier());
                }
                $newValues = array();
                if ($action !== self::ACTION_REMOVE && isset($config['versioned'])) {
                    $newValues = $this->getObjectChangeSetData($ea, $object, $logEntry);
                    $logEntry->setData($newValues);
                }

                if ($action === self::ACTION_UPDATE && 0 === count($newValues)) {
                    return null;
                }

                $version = 1;
                if ($action !== self::ACTION_CREATE) {
                    $version = $ea->getNewVersion($logEntryMeta, $object);
                    if (empty($version)) {
                        // was versioned later
                        $version = 1;
                    }
                }
                $logEntry->setVersion($version);
                    $this->prePersistLogEntry($logEntry, $object);

                    $om->persist($logEntry);
                    $uow->computeChangeSet($logEntryMeta, $logEntry);
                    return null;
                return $logEntry;
            }
        }

        return null;
    }

}
