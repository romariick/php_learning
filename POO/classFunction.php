<?php

class A
{
    public function __construct()
    {
    }
    public function getMethodClass()
    {
        echo 'Method magic : '.__CLASS__;
    }
}

$a = new A();

var_dump(get_class($a));

$a->getMethodClass();
