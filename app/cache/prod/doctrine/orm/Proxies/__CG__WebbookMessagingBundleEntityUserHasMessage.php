<?php

namespace Proxies\__CG__\Webbook\MessagingBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class UserHasMessage extends \Webbook\MessagingBundle\Entity\UserHasMessage implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Common\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array properties to be lazy loaded, with keys being the property
     *            names and values being their default values
     *
     * @see \Doctrine\Common\Persistence\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = [];



    /**
     * @param \Closure $initializer
     * @param \Closure $cloner
     */
    public function __construct($initializer = null, $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return ['__isInitialized__', '' . "\0" . 'Webbook\\MessagingBundle\\Entity\\UserHasMessage' . "\0" . 'id', '' . "\0" . 'Webbook\\MessagingBundle\\Entity\\UserHasMessage' . "\0" . 'token', '' . "\0" . 'Webbook\\MessagingBundle\\Entity\\UserHasMessage' . "\0" . 'receiver', '' . "\0" . 'Webbook\\MessagingBundle\\Entity\\UserHasMessage' . "\0" . 'message', '' . "\0" . 'Webbook\\MessagingBundle\\Entity\\UserHasMessage' . "\0" . 'seen', '' . "\0" . 'Webbook\\MessagingBundle\\Entity\\UserHasMessage' . "\0" . 'important', '' . "\0" . 'Webbook\\MessagingBundle\\Entity\\UserHasMessage' . "\0" . 'deleted'];
        }

        return ['__isInitialized__', '' . "\0" . 'Webbook\\MessagingBundle\\Entity\\UserHasMessage' . "\0" . 'id', '' . "\0" . 'Webbook\\MessagingBundle\\Entity\\UserHasMessage' . "\0" . 'token', '' . "\0" . 'Webbook\\MessagingBundle\\Entity\\UserHasMessage' . "\0" . 'receiver', '' . "\0" . 'Webbook\\MessagingBundle\\Entity\\UserHasMessage' . "\0" . 'message', '' . "\0" . 'Webbook\\MessagingBundle\\Entity\\UserHasMessage' . "\0" . 'seen', '' . "\0" . 'Webbook\\MessagingBundle\\Entity\\UserHasMessage' . "\0" . 'important', '' . "\0" . 'Webbook\\MessagingBundle\\Entity\\UserHasMessage' . "\0" . 'deleted'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (UserHasMessage $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy->__getLazyProperties() as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', []);
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', []);

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function getReceiver()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getReceiver', []);

        return parent::getReceiver();
    }

    /**
     * {@inheritDoc}
     */
    public function setReceiver($receiver)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setReceiver', [$receiver]);

        return parent::setReceiver($receiver);
    }

    /**
     * {@inheritDoc}
     */
    public function getMessage()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMessage', []);

        return parent::getMessage();
    }

    /**
     * {@inheritDoc}
     */
    public function setMessage($message)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMessage', [$message]);

        return parent::setMessage($message);
    }

    /**
     * {@inheritDoc}
     */
    public function isDeleted()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isDeleted', []);

        return parent::isDeleted();
    }

    /**
     * {@inheritDoc}
     */
    public function setDeleted($deleted)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDeleted', [$deleted]);

        return parent::setDeleted($deleted);
    }

    /**
     * {@inheritDoc}
     */
    public function getToken()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getToken', []);

        return parent::getToken();
    }

    /**
     * {@inheritDoc}
     */
    public function setToken($token)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setToken', [$token]);

        return parent::setToken($token);
    }

    /**
     * {@inheritDoc}
     */
    public function isSeen()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isSeen', []);

        return parent::isSeen();
    }

    /**
     * {@inheritDoc}
     */
    public function setSeen($seen)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSeen', [$seen]);

        return parent::setSeen($seen);
    }

    /**
     * {@inheritDoc}
     */
    public function isImportant()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isImportant', []);

        return parent::isImportant();
    }

    /**
     * {@inheritDoc}
     */
    public function setImportant($important)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setImportant', [$important]);

        return parent::setImportant($important);
    }

}