<?php

// Trait : regrouper des fonctionnalité de manière intérressante.

trait listMethode
{
    public function somme()
    {
        return 10;
    }
}
trait listAutreMethod
{
    public function somme()
    {
        return 20;
    }
}

class A
{
    use listMethode, listAutreMethod{
    }
    // listAutreMethod Fatal error because 2 method same (instaededof)

    public function somme()
    {
        return 20;
    }
}
$a = new A();
echo $a->somme(); // 20 : Il prend celui qui est le dernier
