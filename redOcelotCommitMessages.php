<?php
// Include necessary files
require_once('Models/commitsDataSet.php');
require_once('Models/Pagination.php');

// Create an instance of stdClass for the view
$view = new stdClass();

// Set the page title for the view
$view->pageTitle = 'Red Ocelot Commit Data';

// Create an instance of the commitsDataSet class
$commitsDataSet = new Models\commitsDataSet();

// Fetch total records
$totalRecords = $commitsDataSet->fetchAllCommits();

// Setting up pagination and fetching data for the current page
$currentPage = isset($_GET['page']) ? (int)$_GET['page'] : 1;
$baseUrl = 'redOcelotCommitMessages.php';
$recordsPerPage = 10;
$offset = ($currentPage - 1) * $recordsPerPage;

// Fetch commits for the current page
$view->commitDataSet = $commitsDataSet->fetchAllCommitsPagination($recordsPerPage, $offset);

// Include the view file to display the page
require_once('Views/redOcelotCommitMessages.phtml');

