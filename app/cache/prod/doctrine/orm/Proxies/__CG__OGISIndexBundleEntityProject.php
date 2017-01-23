<?php

namespace Proxies\__CG__\OGIS\IndexBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Project extends \OGIS\IndexBundle\Entity\Project implements \Doctrine\ORM\Proxy\Proxy
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
            return array('__isInitialized__', '' . "\0" . 'OGIS\\IndexBundle\\Entity\\Project' . "\0" . 'id', '' . "\0" . 'OGIS\\IndexBundle\\Entity\\Project' . "\0" . 'name', '' . "\0" . 'OGIS\\IndexBundle\\Entity\\Project' . "\0" . 'description', '' . "\0" . 'OGIS\\IndexBundle\\Entity\\Project' . "\0" . 'messageboard', '' . "\0" . 'OGIS\\IndexBundle\\Entity\\Project' . "\0" . 'participants', '' . "\0" . 'OGIS\\IndexBundle\\Entity\\Project' . "\0" . 'created', '' . "\0" . 'OGIS\\IndexBundle\\Entity\\Project' . "\0" . 'catalog', '' . "\0" . 'OGIS\\IndexBundle\\Entity\\Project' . "\0" . 'modified', '' . "\0" . 'OGIS\\IndexBundle\\Entity\\Project' . "\0" . 'publicviewable', '' . "\0" . 'OGIS\\IndexBundle\\Entity\\Project' . "\0" . 'publicjoinable');
        }

        return array('__isInitialized__', '' . "\0" . 'OGIS\\IndexBundle\\Entity\\Project' . "\0" . 'id', '' . "\0" . 'OGIS\\IndexBundle\\Entity\\Project' . "\0" . 'name', '' . "\0" . 'OGIS\\IndexBundle\\Entity\\Project' . "\0" . 'description', '' . "\0" . 'OGIS\\IndexBundle\\Entity\\Project' . "\0" . 'messageboard', '' . "\0" . 'OGIS\\IndexBundle\\Entity\\Project' . "\0" . 'participants', '' . "\0" . 'OGIS\\IndexBundle\\Entity\\Project' . "\0" . 'created', '' . "\0" . 'OGIS\\IndexBundle\\Entity\\Project' . "\0" . 'catalog', '' . "\0" . 'OGIS\\IndexBundle\\Entity\\Project' . "\0" . 'modified', '' . "\0" . 'OGIS\\IndexBundle\\Entity\\Project' . "\0" . 'publicviewable', '' . "\0" . 'OGIS\\IndexBundle\\Entity\\Project' . "\0" . 'publicjoinable');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Project $proxy) {
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
    public function getParticipants()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getParticipants', array());

        return parent::getParticipants();
    }

    /**
     * {@inheritDoc}
     */
    public function addParticipants(\OGIS\IndexBundle\Entity\ProjectParticipation $participants)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addParticipants', array($participants));

        return parent::addParticipants($participants);
    }

    /**
     * {@inheritDoc}
     */
    public function removeParticipant(\OGIS\IndexBundle\Entity\ProjectParticipation $participants)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeParticipant', array($participants));

        return parent::removeParticipant($participants);
    }

    /**
     * {@inheritDoc}
     */
    public function getProjectsUsers()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getProjectsUsers', array());

        return parent::getProjectsUsers();
    }

    /**
     * {@inheritDoc}
     */
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', array());

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function setName($name)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setName', array($name));

        return parent::setName($name);
    }

    /**
     * {@inheritDoc}
     */
    public function getName()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getName', array());

        return parent::getName();
    }

    /**
     * {@inheritDoc}
     */
    public function setDescription($description)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDescription', array($description));

        return parent::setDescription($description);
    }

    /**
     * {@inheritDoc}
     */
    public function getDescription()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDescription', array());

        return parent::getDescription();
    }

    /**
     * {@inheritDoc}
     */
    public function setCreated($created)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCreated', array($created));

        return parent::setCreated($created);
    }

    /**
     * {@inheritDoc}
     */
    public function getCreated()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCreated', array());

        return parent::getCreated();
    }

    /**
     * {@inheritDoc}
     */
    public function setCatalog($catalog)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCatalog', array($catalog));

        return parent::setCatalog($catalog);
    }

    /**
     * {@inheritDoc}
     */
    public function getCatalog()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCatalog', array());

        return parent::getCatalog();
    }

    /**
     * {@inheritDoc}
     */
    public function setModified($modified)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setModified', array($modified));

        return parent::setModified($modified);
    }

    /**
     * {@inheritDoc}
     */
    public function getModified()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getModified', array());

        return parent::getModified();
    }

    /**
     * {@inheritDoc}
     */
    public function setPublicviewable($publicviewable)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPublicviewable', array($publicviewable));

        return parent::setPublicviewable($publicviewable);
    }

    /**
     * {@inheritDoc}
     */
    public function getPublicviewable()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPublicviewable', array());

        return parent::getPublicviewable();
    }

    /**
     * {@inheritDoc}
     */
    public function setPublicjoinable($publicjoinable)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPublicjoinable', array($publicjoinable));

        return parent::setPublicjoinable($publicjoinable);
    }

    /**
     * {@inheritDoc}
     */
    public function getPublicjoinable()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPublicjoinable', array());

        return parent::getPublicjoinable();
    }

    /**
     * {@inheritDoc}
     */
    public function addParticipant(\OGIS\IndexBundle\Entity\ProjectParticipation $participants)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addParticipant', array($participants));

        return parent::addParticipant($participants);
    }

    /**
     * {@inheritDoc}
     */
    public function setMessageboard($messageboard)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMessageboard', array($messageboard));

        return parent::setMessageboard($messageboard);
    }

    /**
     * {@inheritDoc}
     */
    public function getMessageboard()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMessageboard', array());

        return parent::getMessageboard();
    }

}
