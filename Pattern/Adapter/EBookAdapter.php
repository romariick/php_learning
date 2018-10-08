<?php


class EBookAdapter implements BookInterface
{
    private $ebook;


    public function __construct(EBookInterface $ebookInterfac)
    {
        $this->ebook = $ebookInterfac;
    }

    public function getPage()
    {
    }

    public function next()
    {
    }

    public function open()
    {
    }
}
