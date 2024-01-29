<?php

namespace Models;

class repositoriesDataSet {
    protected $_dbHandle, $_dbInstance;

    public function __construct()
    {
        $this->_dbInstance = Database::getInstance();
        $this->_dbHandle = $this->_dbInstance->getdbConnection();
    }

    public function fetchAllRepositories(): array
    {
        $sqlQuery = 'SELECT * FROM repositories
                     INNER JOIN licenses ON repositories.license_id = licenses.id
                     INNER JOIN users ON repositories.owner_id = users.id';

        $statement = $this->_dbHandle->prepare($sqlQuery); // prepare a PDO statement
        $statement->execute(); // execute the PDO statement

        $dataSet = [];
        while ($row = $statement->fetch()) {
            $dataSet[] = new repositories($row);
        }
        return $dataSet;
    }
}