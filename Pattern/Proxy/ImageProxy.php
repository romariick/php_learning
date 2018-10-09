<?php

class ImageProxy implements ImageInterface
{
    private $filename;
    private $image;

    public function __construct($filename)
    {
        $this->filename =  $filename;
    }

    public function display()
    {
        if (!$this->image) {
            $this->image = new Image($this->filename);
        }

        $this->image->display();
    }
}
