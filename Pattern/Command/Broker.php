<?php

require_once 'OrderInterface.php';


class Broker
{
    private $orderList = [];

    public function takeOrder(OrderInterface $order)
    {
        $this->orderList[] = $order;
    }

    public function placeOrder()
    {
        foreach ($this->orderList as $order) {
            $order->execute();
        }

        $this->orderList = [];
    }
}
