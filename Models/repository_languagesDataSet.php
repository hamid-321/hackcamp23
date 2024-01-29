<?php

namespace Models;

class repository_languagesDataSet {
    protected $_dbHandle, $_dbInstance;

public function __construct()
    {
        $this->_dbInstance = Database::getInstance();
        $this->_dbHandle = $this->_dbInstance->getdbConnection();
    }

    public function fetchAllRepositoryLanguages(): array
    {
        $sqlQuery = 'SELECT * FROM repository_languages
                     INNER JOIN languages ON repository_languages.language_id = languages.id
                     INNER JOIN repositories ON repository_languages.repository_id = repositories.id';

        $statement = $this->_dbHandle->prepare($sqlQuery); // prepare a PDO statement
        $statement->execute(); // execute the PDO statement

        $dataSet = [];
        while ($row = $statement->fetch()) {
            $dataSet[] = new repository_languages($row);
        }
        return $dataSet;
    }
}