<?php

namespace Models;

class files {
    protected $_id;
    protected $_branch_id;
    protected $_isDirectory;
    protected $_path;
    protected $_name;
    protected $_line_count;
    protected $_functional_line_count;

    public function __construct($dbRow)
    {
        $this->_id = $dbRow['id'];
        $this->_branch_id = $dbRow['branch_id'];
        $this->_isDirectory = $dbRow['isDirectory'];
        $this->_path = $dbRow['path'];
        $this->_name = $dbRow['name'];
        $this->_line_count = $dbRow['line_count'];
        $this->_functional_line_count = $dbRow['functional_line_count'];
    }

    public function getId()
    {
        return $this->_id;
    }

    public function getBranchId()
    {
        return $this->_branch_id;
    }

    public function getIsDirectory()
    {
        return $this->_isDirectory;
    }

    public function getPath()
    {
        return $this->_path;
    }

    public function getName()
    {
        return $this->_name;
    }

    public function getLineCount()
    {
        return $this->_line_count;
    }

    public function getFunctionalLineCount()
    {
        return $this->_functional_line_count;
    }
}
