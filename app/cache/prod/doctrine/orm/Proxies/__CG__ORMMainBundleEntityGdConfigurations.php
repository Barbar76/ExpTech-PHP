<?php

namespace Proxies\__CG__\ORM\MainBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class GdConfigurations extends \ORM\MainBundle\Entity\GdConfigurations implements \Doctrine\ORM\Proxy\Proxy
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
    public static $lazyPropertiesDefaults = array();



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
            return array('__isInitialized__', 'configurationId', 'status', 'dateCreated', 'lastUpdated', 'accountId', 'configurationName', 'content', 'numRowsGenerated');
        }

        return array('__isInitialized__', 'configurationId', 'status', 'dateCreated', 'lastUpdated', 'accountId', 'configurationName', 'content', 'numRowsGenerated');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (GdConfigurations $proxy) {
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
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', array());
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', array());
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
    public function getConfigurationId()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getConfigurationId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getConfigurationId', array());

        return parent::getConfigurationId();
    }

    /**
     * {@inheritDoc}
     */
    public function setStatus($status)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setStatus', array($status));

        return parent::setStatus($status);
    }

    /**
     * {@inheritDoc}
     */
    public function getStatus()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getStatus', array());

        return parent::getStatus();
    }

    /**
     * {@inheritDoc}
     */
    public function setDateCreated($dateCreated)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDateCreated', array($dateCreated));

        return parent::setDateCreated($dateCreated);
    }

    /**
     * {@inheritDoc}
     */
    public function getDateCreated()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDateCreated', array());

        return parent::getDateCreated();
    }

    /**
     * {@inheritDoc}
     */
    public function setLastUpdated($lastUpdated)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLastUpdated', array($lastUpdated));

        return parent::setLastUpdated($lastUpdated);
    }

    /**
     * {@inheritDoc}
     */
    public function getLastUpdated()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLastUpdated', array());

        return parent::getLastUpdated();
    }

    /**
     * {@inheritDoc}
     */
    public function setAccountId($accountId)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAccountId', array($accountId));

        return parent::setAccountId($accountId);
    }

    /**
     * {@inheritDoc}
     */
    public function getAccountId()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAccountId', array());

        return parent::getAccountId();
    }

    /**
     * {@inheritDoc}
     */
    public function setConfigurationName($configurationName)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setConfigurationName', array($configurationName));

        return parent::setConfigurationName($configurationName);
    }

    /**
     * {@inheritDoc}
     */
    public function getConfigurationName()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getConfigurationName', array());

        return parent::getConfigurationName();
    }

    /**
     * {@inheritDoc}
     */
    public function setContent($content)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setContent', array($content));

        return parent::setContent($content);
    }

    /**
     * {@inheritDoc}
     */
    public function getContent()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getContent', array());

        return parent::getContent();
    }

    /**
     * {@inheritDoc}
     */
    public function setNumRowsGenerated($numRowsGenerated)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNumRowsGenerated', array($numRowsGenerated));

        return parent::setNumRowsGenerated($numRowsGenerated);
    }

    /**
     * {@inheritDoc}
     */
    public function getNumRowsGenerated()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNumRowsGenerated', array());

        return parent::getNumRowsGenerated();
    }

}