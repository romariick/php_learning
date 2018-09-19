<?php

$reflectionClass = new ReflectionClass('Voiture');

echo 'Constructor : '.$reflectionClass->getConstructor();
$reflectionClass->getEndLine();
$reflectionClass->getMethods();
$reflectionClass->getInterfaces();

$reflecFunctio = new ReflectionObject('Voiture');
$reflecFunctio->getConstants();
