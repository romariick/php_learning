<?php
class A
{
    protected $name;
    protected $age;
    
    public function setName($name) {
       $this->name = $name;
       return $this;
    }
    public function setAge($age) {
        $this->age = $age;
        return $this; 
        // retourner l'instance courrant pour avoir le droit d'enchainement du méthode
    }
    public function __toString() {
        return "My name is : $this->name and age : $this->age";
    }    
}
$a = new A();
echo $a->setAge('29').PHP_EOL;// My name ... 
echo $a->setAge('20')->setName('Lalaina').PHP_EOL; // à cause du $this.
