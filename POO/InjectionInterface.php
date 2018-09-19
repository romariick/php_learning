<?php

interface IAdresse
{
    public function getFullAddress();
}

class Address implements IAdresse
{
    public function __construct()
    {
    }
    
    public function getFullAddress()
    {
        echo 'Full address';
    }
}

class NonAddress implements IAdresse
{
    public function getFullAddress()
    {
        echo 'Full address 2';
    }
}

class Person
{
    public function __construct(IAdresse $iaddress)
    {
        $this->iaddress = $iaddress;
    }
    public function getAdress()
    {
        return $this->iaddress;
    }
}

$address = new NonAddress();
$person = new Person($address);
echo $person->getAdress()->getFullAddress();
