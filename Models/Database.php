<?php
namespace Models;
use PDO;
use PDOException;

class Database {
    protected static $_dbInstance = null;
    protected $_dbHandle;

    public static function getInstance() {
        $username = 'hc23-22';
        $password = 'Vs7FrwZ5d7sMdYW';
        $host = 'poseidon.salford.ac.uk';
        $dbName = 'hc23_22_redocelot';
        $port = 5432;

        if (self::$_dbInstance === null) {
            self::$_dbInstance = new self($username, $password, $host, $dbName, $port);
        }

        return self::$_dbInstance;
    }

    private function __construct($username, $password, $host, $database, $port) {
        try {
            $this->_dbHandle = new PDO("pgsql:host=$host;dbname=$database;port=$port", $username, $password);
            $this->_dbHandle->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    public function getdbConnection() {
        return $this->_dbHandle;
    }

    public function __destruct() {
        $this->_dbHandle = null;
    }
}
