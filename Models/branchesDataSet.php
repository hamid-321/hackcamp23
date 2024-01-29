<?php

namespace Models;

class branchesDataSet {
    protected $_dbHandle, $_dbInstance;

    public function __construct()
    {
        $this->_dbInstance = Database::getInstance();
        $this->_dbHandle = $this->_dbInstance->getdbConnection();
    }

    public function fetchAllBranches(): array
    {
        $sqlQuery = 'SELECT * FROM branches
                     INNER JOIN repositories ON branches.repository_id = repositories.id';

        $statement = $this->_dbHandle->prepare($sqlQuery); // prepare a PDO statement
        $statement->execute(); // execute the PDO statement

        $dataSet = [];
        while ($row = $statement->fetch()) {
            $dataSet[] = new branches($row);
        }
        return $dataSet;
    }

}