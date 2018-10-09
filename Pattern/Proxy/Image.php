<?php

require_once 'ImageInterface.php';

class Image implements ImageInterface
{
    private $filename;

    public function __construct($filename)
    {
        $this->filename = $filename;
        // load
        $this->load($filename);
    }

    public function display()
    {
        echo "Affiche de l'image".PHP_EOL;
    }

    private function load($filename)
    {
        echo "Chargement de l'image".PHP_EOL;
    }
}
