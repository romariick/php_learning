<?php

require_once 'APIWriter.php';
require_once 'DatabaseWriter.php';
require_once 'FileWriter.php';
require_once 'WtriterInterface.php';
require_once 'ClientWriter.php';

$data = ['data1', 'data2', 'data3'];

// un fichier
$clientFileWriter = new ClientWriter(new FileWriter());
$clientFileWriter->write($data);

// bd
$clientDatabaseWriter = new ClientWriter(new DatabaseWriter());
$clientDatabaseWriter->write($data);

// API
$clientAPIWriter = new ClientWriter(new APIWriter());
$clientAPIWriter->write($data);
