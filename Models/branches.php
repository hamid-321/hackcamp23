<?php

namespace Models;

class branches {
    protected $_id;
    protected $_name;
    protected $_repository_id;

public function __construct($dbRow)
    {
        $this->_id = $dbRow['id'];
        $this->_name = $dbRow['name'];
        $this->_repository_id = $dbRow['repository_id'];
    }

public function getId()
    {
    return $this->_id;
    }

public function getName()
    {
        return $this->_name;
    }

public function getRepositoryId()
    {
        return $this->_repository_id;
    }
}
