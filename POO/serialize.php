<?php

class A
{
    public $a = 10;
    
    public function showMe()
    {
        echo 'Show me'.PHP_EOL;
    }
    public function __sleep()
    {
        return ['a'];
    }
    public function __wakeup()
    {
        echo 'Wakeup deserialization';
    }
}

$a = new A();
$aSerialize = serialize($a);//  "O:1:"A":1:{s:1:"a";i:10;}"
var_dump($aSerialize);
$userialize = unserialize($aSerialize);
var_dump($userialize);

/*
 * Conclusion :
 *  - serialize convertit un objet en chaîne.
 *  - unserialize converti une chaîne en Objet.
 */
