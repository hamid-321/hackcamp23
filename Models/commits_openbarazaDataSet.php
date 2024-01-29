<?php

namespace Models;

use PDO;

require_once('Models/Database.php');
require_once('commits_openbaraza.php');

class commits_openbarazaDataSet {
    protected $_dbHandle, $_dbInstance;

    public function __construct()
    {
        $this->_dbInstance = Database::getInstance();
        $this->_dbHandle = $this->_dbInstance->getdbConnection();
    }

    public function fetchAllOpenBarazaCommits(): int
    {
        $sqlQuery = 'SELECT * FROM commits_openbaraza';

        $statement = $this->_dbHandle->prepare($sqlQuery); // prepare a PDO statement
        $statement->execute(); // execute the PDO statement

        return (int)$statement->fetchColumn();
    }

    public function fetchAllOpenBarazaCommitsPagination($recordsPerPage, $offset)
    {
        $sqlQuery = 'SELECT * FROM commits_openbaraza
                 LIMIT :recordsPerPage OFFSET :offset';

        $statement = $this->_dbHandle->prepare($sqlQuery);
        $statement->bindParam(':recordsPerPage', $recordsPerPage, PDO::PARAM_INT);
        $statement->bindParam(':offset', $offset, PDO::PARAM_INT);
        $statement->execute();

        $dataSet = [];
        while ($row = $statement->fetch()) {
            $dataSet[] = new commits_openbaraza($row);
        }
        return $dataSet;
    }

    public function fetchAllCommitsOBWithBuckets(): array
    {
        $sqlQuery = "SELECT
                        TO_CHAR(date, 'YYYY-\"Q\"Q') AS quarter_bucket,
                    COUNT(id) AS total_value
                FROM
                    commits_openbaraza
                WHERE
                    date >= '2021-01-01'
                GROUP BY
                    TO_CHAR(date, 'YYYY-\"Q\"Q')
                ORDER BY
                    quarter_bucket;";


        $statement = $this->_dbHandle->prepare($sqlQuery); // prepare a PDO statement
        $statement->execute(); // execute the PDO statement

        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }
}