<?php

namespace Models;

class users {
    protected $_id;
    protected $_username;
    protected $_avatar_url;

    public function __construct($dbRow)
    {
        $this->_id = $dbRow['id'];
        $this->_username = $dbRow['username'];
        $this->_avatar_url = $dbRow['avatar_url'];
    }

    public function getId()
    {
        return $this->_id;
    }

    public function getUsername()
    {
        return $this->_username;
    }

    public function getAvatarUrl()
    {
        return $this->_avatar_url;
    }
}