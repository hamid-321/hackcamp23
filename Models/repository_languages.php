<?php

namespace Models;

class repository_languages {
    protected $_language_id;
    protected $_repository_id;

    public function __construct($dbRow)
    {
        $this->_language_id = $dbRow['language_id'];
        $this->_repository_id = $dbRow['repository_id'];
    }

    public function getLanguageId()
    {
        return $this->_language_id;
    }

    public function getRepositoryId()
    {
        return $this->_repository_id;
    }
}