<?php

namespace Models;

class licenses {
    protected $_id;
    protected $_key;
    protected $_name;
    protected $_spdx_id;
    protected $_url;
    protected $_node_id;

    public function __construct($dbRow)
    {
        $this->_id = $dbRow['id'];
        $this->_key = $dbRow['key'];
        $this->_name = $dbRow['name'];
        $this->_spdx_id = $dbRow['spdx_id'];
        $this->_url = $dbRow['url'];
        $this->_node_id = $dbRow['node_id'];
    }

    public function getId()
    {
        return $this->_id;
    }

    public function getKey()
    {
        return $this->_key;
    }

    public function getName()
    {
        return $this->_name;
    }

    public function getSpdxId()
    {
        return $this->_spdx_id;
    }

    public function getUrl()
    {
        return $this->_url;
    }

    public function getNodeId()
    {
        return $this->_node_id;
    }
}