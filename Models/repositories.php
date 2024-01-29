<?php

namespace Models;

class repositories {
    protected $_id;
    protected $_watchers;
    protected $_forks_count;
    protected $_name;
    protected $_license_id;
    protected $_owner_id;
    protected $_status;
    protected $_linked_at;
    protected $_modified_at;
    protected $_contributors_url;

    public function __construct($dbRow)
    {
        $this->_id = $dbRow['id'];
        $this->_watchers = $dbRow['watchers'];
        $this->_forks_count = $dbRow['forks_count'];
        $this->_name = $dbRow['name'];
        $this->_license_id = $dbRow['license_id'];
        $this->_owner_id = $dbRow['owner_id'];
        $this->_status = $dbRow['status'];
        $this->_linked_at = $dbRow['linked_at'];
        $this->_modified_at = $dbRow['modified_at'];
        $this->_contributors_url = $dbRow['contributors_url'];
    }

    public function getId()
    {
        return $this->_id;
    }

    public function getWatchers()
    {
        return $this->_watchers;
    }

    public function getForksCount() {
        return $this->_forks_count;
    }

    public function getName()
    {
        return $this->_name;
    }

    public function getLicenseId()
    {
        return $this->_license_id;
    }

    public function getOwnerId()
    {
        return $this->_owner_id;
    }

    public function getStatus()
    {
        return $this->_status;
    }

    public function getLinkedAt()
    {
        return $this->_linked_at;
    }

    public function getModifiedAt()
    {
        return $this->_modified_at;
    }

    public function getContributorsUrl()
    {
        return $this->_contributors_url;
    }
}
