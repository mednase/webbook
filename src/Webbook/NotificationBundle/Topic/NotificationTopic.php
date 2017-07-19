<?php
namespace Webbook\NotificationBundle\Topic;
/**
 * Created by PhpStorm.
 * User: medna
 * Date: 10/03/2017
 * Time: 10:48
 */
use Doctrine\ORM\EntityManager;
use Gos\Bundle\WebSocketBundle\Router\WampRequest;
use Gos\Bundle\WebSocketBundle\Topic\PushableTopicInterface;
use Gos\Bundle\WebSocketBundle\Topic\TopicInterface;
use Ratchet\ConnectionInterface;
use Ratchet\Wamp\Topic;
use Webbook\NotificationBundle\Entity\Notification;

class NotificationTopic implements TopicInterface,PushableTopicInterface
{
    private $entityManager;

    /**
     * NotificationTopic constructor.
     * @param EntityManager $entityManager
     */
    public function __construct(EntityManager $entityManager)
    {
        $this->entityManager=$entityManager;
    }


    /**
     * @param  ConnectionInterface $connection
     * @param  Topic $topic
     * @param WampRequest $request
     */
    public function onSubscribe(ConnectionInterface $connection, Topic $topic, WampRequest $request)
    {
    }

    /**
     * @param  ConnectionInterface $connection
     * @param  Topic $topic
     * @param WampRequest $request
     */
    public function onUnSubscribe(ConnectionInterface $connection, Topic $topic, WampRequest $request)
    {
    }

    /**
     * @param  ConnectionInterface $connection
     * @param  Topic $topic
     * @param WampRequest $request
     * @param $event
     * @param  array $exclude
     * @param  array $eligible
     */
    public function onPublish(ConnectionInterface $connection, Topic $topic, WampRequest $request, $event, array $exclude, array $eligible)
    {
        $data = (array) json_decode($event);
        if($topic->count()>0){
            $nt=$this->entityManager->find(Notification::class,$data['id']);
            $nt->setSeen(true);
            $this->entityManager->persist($nt);
            $this->entityManager->flush();
        }

        $topic->broadcast([
            'msg' => $event
        ]);
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'notification.topic';
    }

    /**
     * @param Topic $topic
     * @param WampRequest $request
     * @param string|array $data
     * @param string $provider
     */
    public function onPush(Topic $topic, WampRequest $request, $data, $provider)
    {
        $topic->broadcast($data);
    }
}
