<?php

namespace Models;

class files_openbaraza {
    protected $_id;
    protected $_path;
    protected $_name;
    protected $_line_count;


    public function __construct($dbRow)
    {
        $this->_id = $dbRow['id'];
        $this->_path = $dbRow['path'];
        $this->_name = $dbRow['name'];
        $this->_line_count = $dbRow['line_count'];

    }

    public function getId()
    {
        return $this->_id;
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
}
