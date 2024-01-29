<?php

namespace Models;

class commits {
    protected $_id;
    protected $_sha;
    protected $_date;
    protected $_message;
    protected $_branch_id;
    protected $_author_id;
    protected $_username;

public function __construct($dbRow)
    {
        $this->_id = $dbRow['id'];
        $this->_sha = $dbRow['sha'];
        $this->_date = $dbRow['date'];
        $this->_message = $dbRow['message'];
        $this->_branch_id = $dbRow['branch_id'];
        $this->_author_id = $dbRow['author_id'];
        $this->_username = $dbRow['username'];
    }

public function getId()
    {
        return $this->_id;
    }

public function getSha()
    {
        return $this->_sha;
    }

public function getDate()
    {
        return $this->_date;
    }

public function getMessage()
    {
        return $this->_message;
    }

public function getBranchId()
    {
        return $this->_branch_id;
    }

public function getAuthorId()
    {
        return $this->_author_id;
    }

    public function getUsername()
    {
        return $this->_username;
    }
}
