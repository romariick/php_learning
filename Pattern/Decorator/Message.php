<?php


class Message implements DisplayableInterface
{
    private $message;

    public function __construct($message)
    {
        $this->message = $message;
    }

    public function display()
    {
        echo $this->message;
    }
}
