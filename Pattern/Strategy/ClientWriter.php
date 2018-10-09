<?php


class ClientWriter
{
    private $writerInterface;

    public function __construct(WtriterInterface $writerInterface)
    {
        $this->writerInterface = $writerInterface;
    }

    public function write($data)
    {
        $this->writerInterface->write($data);
    }
}
