<?php

require_once 'DatabaseFactory.php';

$db = DatabaseFactory::create('mysql');

var_dump($db); die;
