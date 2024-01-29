<?php

// Include necessary files
require_once('Models/Database.php');
require_once('Models/commits_openbarazaDataSet.php');
require_once('Models/Pagination.php');

// Create an instance of stdClass for the view
$view = new stdClass();

// Set the page title for the view
$view->pageTitle = 'Open Baraza Commit Data';

// Create an instance of the commits_openbarazaDataSet class
$commitsDataSet = new Models\commits_openbarazaDataSet();

// Fetch total records
$totalRecords = $commitsDataSet->fetchAllOpenBarazaCommits();

// Setting up pagination and fetching data for the current page
$currentPage = isset($_GET['page']) ? (int)$_GET['page'] : 1;
$baseUrl = 'openBarazaCommitMessages.php';
$recordsPerPage = 10;
$offset = ($currentPage - 1) * $recordsPerPage;

// Fetch commits for the current page
$view->commitDataSet = $commitsDataSet->fetchAllOpenBarazaCommitsPagination($recordsPerPage, $offset);

// Include the view file to display the page
require_once('Views/openBarazaCommitMessages.phtml');
