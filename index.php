<?php

require_once('Models/commitsDataSet.php');

$view = new stdClass();
$view->pageTitle = 'Commit Data';

require_once('Views/index.phtml');