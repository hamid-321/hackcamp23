<?php

namespace Models;

class commits_openbaraza
{
    protected $_id;
    protected $_hash;
    protected $_date;
    protected $_message;
    protected $_author;

    public function __construct($dbRow)
    {
        $this->_id = $dbRow['id'];
        $this->_hash = $dbRow['hash'];
        $this->_date = $dbRow['date'];
        $this->_message = $dbRow['message'];
        $this->_author = $dbRow['author'];

    }

    public function getId()
    {
        return $this->_id;
    }

    public function getHash()
    {
        return $this->_hash;
    }

    public function getDate()
    {
        return $this->_date;
    }

    public function getMessage()
    {
        return $this->_message;
    }

    public function getAuthor()
    {
        return $this->_author;
    }
}