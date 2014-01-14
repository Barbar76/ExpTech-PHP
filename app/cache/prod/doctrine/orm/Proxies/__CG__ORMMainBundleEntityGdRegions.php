<?php

namespace Proxies\__CG__\ORM\MainBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class GdRegions extends \ORM\MainBundle\Entity\GdRegions implements \Doctrine\ORM\Proxy\Proxy
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
            return array('__isInitialized__', 'regionId', 'countrySlug', 'region', 'regionShort', 'regionSlug', 'weight');
        }

        return array('__isInitialized__', 'regionId', 'countrySlug', 'region', 'regionShort', 'regionSlug', 'weight');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (GdRegions $proxy) {
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
    public function getRegionId()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getRegionId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRegionId', array());

        return parent::getRegionId();
    }

    /**
     * {@inheritDoc}
     */
    public function setCountrySlug($countrySlug)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCountrySlug', array($countrySlug));

        return parent::setCountrySlug($countrySlug);
    }

    /**
     * {@inheritDoc}
     */
    public function getCountrySlug()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCountrySlug', array());

        return parent::getCountrySlug();
    }

    /**
     * {@inheritDoc}
     */
    public function setRegion($region)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRegion', array($region));

        return parent::setRegion($region);
    }

    /**
     * {@inheritDoc}
     */
    public function getRegion()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRegion', array());

        return parent::getRegion();
    }

    /**
     * {@inheritDoc}
     */
    public function setRegionShort($regionShort)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRegionShort', array($regionShort));

        return parent::setRegionShort($regionShort);
    }

    /**
     * {@inheritDoc}
     */
    public function getRegionShort()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRegionShort', array());

        return parent::getRegionShort();
    }

    /**
     * {@inheritDoc}
     */
    public function setRegionSlug($regionSlug)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRegionSlug', array($regionSlug));

        return parent::setRegionSlug($regionSlug);
    }

    /**
     * {@inheritDoc}
     */
    public function getRegionSlug()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRegionSlug', array());

        return parent::getRegionSlug();
    }

    /**
     * {@inheritDoc}
     */
    public function setWeight($weight)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setWeight', array($weight));

        return parent::setWeight($weight);
    }

    /**
     * {@inheritDoc}
     */
    public function getWeight()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getWeight', array());

        return parent::getWeight();
    }

}