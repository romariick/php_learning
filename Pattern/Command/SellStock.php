<?php

require_once 'OrderInterface.php';
require_once 'Stock.php';

class SellStock implements OrderInterface
{
    private $stock;

    public function __construct(Stock $stock)
    {
        $this->stock = $stock;
    }

    public function execute()
    {
        $this->stock->sell();
    }
}
