<?php

namespace Proxies\__CG__\Webbook\MainBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Version extends \Webbook\MainBundle\Entity\Version implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', '' . "\0" . 'Webbook\\MainBundle\\Entity\\Version' . "\0" . 'id', '' . "\0" . 'Webbook\\MainBundle\\Entity\\Version' . "\0" . 'token', '' . "\0" . 'Webbook\\MainBundle\\Entity\\Version' . "\0" . 'createdBy', '' . "\0" . 'Webbook\\MainBundle\\Entity\\Version' . "\0" . 'number', '' . "\0" . 'Webbook\\MainBundle\\Entity\\Version' . "\0" . 'content', '' . "\0" . 'Webbook\\MainBundle\\Entity\\Version' . "\0" . 'media', '' . "\0" . 'Webbook\\MainBundle\\Entity\\Version' . "\0" . 'bookBlock', '' . "\0" . 'Webbook\\MainBundle\\Entity\\Version' . "\0" . 'status', '' . "\0" . 'Webbook\\MainBundle\\Entity\\Version' . "\0" . 'progress', 'createdAt', 'updatedAt'];
        }

        return ['__isInitialized__', '' . "\0" . 'Webbook\\MainBundle\\Entity\\Version' . "\0" . 'id', '' . "\0" . 'Webbook\\MainBundle\\Entity\\Version' . "\0" . 'token', '' . "\0" . 'Webbook\\MainBundle\\Entity\\Version' . "\0" . 'createdBy', '' . "\0" . 'Webbook\\MainBundle\\Entity\\Version' . "\0" . 'number', '' . "\0" . 'Webbook\\MainBundle\\Entity\\Version' . "\0" . 'content', '' . "\0" . 'Webbook\\MainBundle\\Entity\\Version' . "\0" . 'media', '' . "\0" . 'Webbook\\MainBundle\\Entity\\Version' . "\0" . 'bookBlock', '' . "\0" . 'Webbook\\MainBundle\\Entity\\Version' . "\0" . 'status', '' . "\0" . 'Webbook\\MainBundle\\Entity\\Version' . "\0" . 'progress', 'createdAt', 'updatedAt'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Version $proxy) {
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
    public function setToken($token)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setToken', [$token]);

        return parent::setToken($token);
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
    public function __toString()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, '__toString', []);

        return parent::__toString();
    }

    /**
     * {@inheritDoc}
     */
    public function getStatus()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getStatus', []);

        return parent::getStatus();
    }

    /**
     * {@inheritDoc}
     */
    public function setStatus($status)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setStatus', [$status]);

        return parent::setStatus($status);
    }

    /**
     * {@inheritDoc}
     */
    public function getNumber()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNumber', []);

        return parent::getNumber();
    }

    /**
     * {@inheritDoc}
     */
    public function setNumber($number)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNumber', [$number]);

        return parent::setNumber($number);
    }

    /**
     * {@inheritDoc}
     */
    public function getCreatedBy()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCreatedBy', []);

        return parent::getCreatedBy();
    }

    /**
     * {@inheritDoc}
     */
    public function setCreatedBy($createdBy)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCreatedBy', [$createdBy]);

        return parent::setCreatedBy($createdBy);
    }

    /**
     * {@inheritDoc}
     */
    public function getBookBlock()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getBookBlock', []);

        return parent::getBookBlock();
    }

    /**
     * {@inheritDoc}
     */
    public function setBookBlock($bookBlock)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setBookBlock', [$bookBlock]);

        return parent::setBookBlock($bookBlock);
    }

    /**
     * {@inheritDoc}
     */
    public function getContent()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getContent', []);

        return parent::getContent();
    }

    /**
     * {@inheritDoc}
     */
    public function setContent($content)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setContent', [$content]);

        return parent::setContent($content);
    }

    /**
     * {@inheritDoc}
     */
    public function getProgress()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getProgress', []);

        return parent::getProgress();
    }

    /**
     * {@inheritDoc}
     */
    public function setProgress($progress)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setProgress', [$progress]);

        return parent::setProgress($progress);
    }

    /**
     * {@inheritDoc}
     */
    public function getMedia()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMedia', []);

        return parent::getMedia();
    }

    /**
     * {@inheritDoc}
     */
    public function setMedia($media)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMedia', [$media]);

        return parent::setMedia($media);
    }

    /**
     * {@inheritDoc}
     */
    public function getCreatedAt()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCreatedAt', []);

        return parent::getCreatedAt();
    }

    /**
     * {@inheritDoc}
     */
    public function getUpdatedAt()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUpdatedAt', []);

        return parent::getUpdatedAt();
    }

    /**
     * {@inheritDoc}
     */
    public function setCreatedAt(\DateTime $createdAt)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCreatedAt', [$createdAt]);

        return parent::setCreatedAt($createdAt);
    }

    /**
     * {@inheritDoc}
     */
    public function setUpdatedAt(\DateTime $updatedAt)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUpdatedAt', [$updatedAt]);

        return parent::setUpdatedAt($updatedAt);
    }

    /**
     * {@inheritDoc}
     */
    public function updateTimestamps()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'updateTimestamps', []);

        return parent::updateTimestamps();
    }

}
