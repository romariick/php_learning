<?php

$dateTimeObj = new DateTime();
$timestamp = $dateTimeObj->getTimestamp();
echo $dateTimeObj->format(DateTime::RFC3339).PHP_EOL;

$time = time();
echo 'Time :'.date('Y-m-d:h:m:s', $time).PHP_EOL;
$maketime = mktime();

echo 'Maketime :'.$maketime.PHP_EOL;
