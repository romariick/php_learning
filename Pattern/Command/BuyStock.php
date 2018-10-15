<?php

require_once 'OrderInterface.php';

class BuyStock implements OrderInterface
{
    private $stock;

    public function __construct(Stock $stock)
    {
        $this->stock  = $stock;
    }

    public function execute()
    {
        $this->stock->buy();
    }
}
