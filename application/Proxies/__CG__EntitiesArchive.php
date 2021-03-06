<?php

namespace Proxies\__CG__\Entities;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Archive extends \Entities\Archive implements \Doctrine\ORM\Proxy\Proxy
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
            return array('__isInitialized__', 'ARCHIVE_STATUS', 'username', 'status', 'archived_at', 'status_changed_at', 'homedir_server', 'homedir_file', 'homedir_orig_size', 'homedir_size', 'maildir_server', 'maildir_file', 'maildir_orig_size', 'maildir_size', 'data', 'id', 'Domain', 'ArchivedBy');
        }

        return array('__isInitialized__', 'ARCHIVE_STATUS', 'username', 'status', 'archived_at', 'status_changed_at', 'homedir_server', 'homedir_file', 'homedir_orig_size', 'homedir_size', 'maildir_server', 'maildir_file', 'maildir_orig_size', 'maildir_size', 'data', 'id', 'Domain', 'ArchivedBy');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Archive $proxy) {
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
    public function setUsername($username)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUsername', array($username));

        return parent::setUsername($username);
    }

    /**
     * {@inheritDoc}
     */
    public function getUsername()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUsername', array());

        return parent::getUsername();
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
    public function setArchivedAt($archivedAt)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setArchivedAt', array($archivedAt));

        return parent::setArchivedAt($archivedAt);
    }

    /**
     * {@inheritDoc}
     */
    public function getArchivedAt()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getArchivedAt', array());

        return parent::getArchivedAt();
    }

    /**
     * {@inheritDoc}
     */
    public function setStatusChangedAt($statusChangedAt)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setStatusChangedAt', array($statusChangedAt));

        return parent::setStatusChangedAt($statusChangedAt);
    }

    /**
     * {@inheritDoc}
     */
    public function getStatusChangedAt()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getStatusChangedAt', array());

        return parent::getStatusChangedAt();
    }

    /**
     * {@inheritDoc}
     */
    public function setHomedirServer($homedirServer)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setHomedirServer', array($homedirServer));

        return parent::setHomedirServer($homedirServer);
    }

    /**
     * {@inheritDoc}
     */
    public function getHomedirServer()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getHomedirServer', array());

        return parent::getHomedirServer();
    }

    /**
     * {@inheritDoc}
     */
    public function setHomedirFile($homedirFile)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setHomedirFile', array($homedirFile));

        return parent::setHomedirFile($homedirFile);
    }

    /**
     * {@inheritDoc}
     */
    public function getHomedirFile()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getHomedirFile', array());

        return parent::getHomedirFile();
    }

    /**
     * {@inheritDoc}
     */
    public function setHomedirOrigSize($homedirOrigSize)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setHomedirOrigSize', array($homedirOrigSize));

        return parent::setHomedirOrigSize($homedirOrigSize);
    }

    /**
     * {@inheritDoc}
     */
    public function getHomedirOrigSize()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getHomedirOrigSize', array());

        return parent::getHomedirOrigSize();
    }

    /**
     * {@inheritDoc}
     */
    public function setHomedirSize($homedirSize)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setHomedirSize', array($homedirSize));

        return parent::setHomedirSize($homedirSize);
    }

    /**
     * {@inheritDoc}
     */
    public function getHomedirSize()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getHomedirSize', array());

        return parent::getHomedirSize();
    }

    /**
     * {@inheritDoc}
     */
    public function setMaildirServer($maildirServer)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMaildirServer', array($maildirServer));

        return parent::setMaildirServer($maildirServer);
    }

    /**
     * {@inheritDoc}
     */
    public function getMaildirServer()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMaildirServer', array());

        return parent::getMaildirServer();
    }

    /**
     * {@inheritDoc}
     */
    public function setMaildirFile($maildirFile)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMaildirFile', array($maildirFile));

        return parent::setMaildirFile($maildirFile);
    }

    /**
     * {@inheritDoc}
     */
    public function getMaildirFile()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMaildirFile', array());

        return parent::getMaildirFile();
    }

    /**
     * {@inheritDoc}
     */
    public function setMaildirOrigSize($maildirOrigSize)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMaildirOrigSize', array($maildirOrigSize));

        return parent::setMaildirOrigSize($maildirOrigSize);
    }

    /**
     * {@inheritDoc}
     */
    public function getMaildirOrigSize()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMaildirOrigSize', array());

        return parent::getMaildirOrigSize();
    }

    /**
     * {@inheritDoc}
     */
    public function setMaildirSize($maildirSize)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMaildirSize', array($maildirSize));

        return parent::setMaildirSize($maildirSize);
    }

    /**
     * {@inheritDoc}
     */
    public function getMaildirSize()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMaildirSize', array());

        return parent::getMaildirSize();
    }

    /**
     * {@inheritDoc}
     */
    public function setData($data)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setData', array($data));

        return parent::setData($data);
    }

    /**
     * {@inheritDoc}
     */
    public function getData()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getData', array());

        return parent::getData();
    }

    /**
     * {@inheritDoc}
     */
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', array());

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function setDomain(\Entities\Domain $domain = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDomain', array($domain));

        return parent::setDomain($domain);
    }

    /**
     * {@inheritDoc}
     */
    public function getDomain()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDomain', array());

        return parent::getDomain();
    }

    /**
     * {@inheritDoc}
     */
    public function setArchivedBy(\Entities\Admin $archivedBy = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setArchivedBy', array($archivedBy));

        return parent::setArchivedBy($archivedBy);
    }

    /**
     * {@inheritDoc}
     */
    public function getArchivedBy()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getArchivedBy', array());

        return parent::getArchivedBy();
    }

}
