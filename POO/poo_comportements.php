<?php

class A{
    protected $age;
    public function __construct(){        
    }
    public function meth(){
        echo 'Ok';
    }

    public function __toString() {
        return 'To string';
    }
    public function setAge($age) {
        
        $this->age = $age;
        return $this;
        
    }
}

$a = new A();
echo($a->setAge(1000));

