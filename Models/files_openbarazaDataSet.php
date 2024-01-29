<?php

namespace Models;

require_once('files_openbaraza.php');

class files_openbarazaDataSet {
    protected $_dbHandle, $_dbInstance;

    public function __construct()
    {
        $this->_dbInstance = Database::getInstance();
        $this->_dbHandle = $this->_dbInstance->getdbConnection();
    }

    public function fetchAllOpenBarazaFiles(): array
    {
        $sqlQuery = 'SELECT * FROM files_openbaraza';

        $statement = $this->_dbHandle->prepare($sqlQuery);
        $statement->execute();

        $dataSet = [];
        while ($row = $statement->fetch()) {
            $dataSet[] = new files_openbaraza($row);
        }
        return $dataSet;
    }

    public function fetchOpenBarazaFilesBySize(): array
    {
        $sqlQuery = 'SELECT * FROM files_openbaraza
                     ORDER BY line_count DESC
                     LIMIT 20';

        $statement = $this->_dbHandle->prepare($sqlQuery);
        $statement->execute();

        $dataSet = [];
        while ($row = $statement->fetch()) {
            $dataSet[] = new \Models\files_openbaraza($row);
        }
        return $dataSet;
    }
}
