<?php

namespace Models;

class _primsa_migrationsDataSet {
    protected $_dbHandle, $_dbInstance;

    public function __construct()
    {
        $this->_dbInstance = Database::getInstance();
        $this->_dbHandle = $this->_dbInstance->getdbConnection();
    }

    public function fetchAllPrismaMigrations(): array
    {
        $sqlQuery = 'SELECT * FROM _prisma_migrations';

        $statement = $this->_dbHandle->prepare($sqlQuery); // prepare a PDO statement
        $statement->execute(); // execute the PDO statement

        $dataSet = [];
        while ($row = $statement->fetch()) {
            $dataSet[] = new _prisma_migrations($row);
        }
        return $dataSet;
    }
}