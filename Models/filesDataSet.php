<?php

namespace Models;

class filesDataSet {
    protected $_dbHandle, $_dbInstance;

    public function __construct()
    {
        $this->_dbInstance = Database::getInstance();
        $this->_dbHandle = $this->_dbInstance->getdbConnection();
    }

    public function fetchAllFiles(): array
    {
        $sqlQuery = 'SELECT files.id, files.branch_id, files."isDirectory", files.path, files.name AS name, files.line_count, files.functional_line_count 
                     FROM files
                     INNER JOIN branches ON files.branch_id = branches.id';

        $statement = $this->_dbHandle->prepare($sqlQuery);
        $statement->execute();


        $dataSet = [];
        while ($row = $statement->fetch()) {
            $dataSet[] = new files($row);
        }
        return $dataSet;
    }

    public function fetchFilesBySize(): array
    {
        $sqlQuery = 'SELECT * FROM files
                     ORDER BY line_count DESC
                     LIMIT 20';

        $statement = $this->_dbHandle->prepare($sqlQuery);
        $statement->execute();


        $dataSet = [];
        while ($row = $statement->fetch()) {
            $dataSet[] = new files($row);
        }
        return $dataSet;
    }
}