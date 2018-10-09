<?php


require_once 'WtriterInterface.php';

class APIWriter implements WtriterInterface
{
    public function write($data)
    {
        echo "API".PHP_EOL;
    }
}
