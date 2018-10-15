<?php

require_once 'Broker.php';
require_once 'BuyStock.php';
require_once 'OrderInterface.php';
require_once 'SellStock.php';
require_once 'Stock.php';


$stock = new Stock();

$buyStock = new BuyStock($stock);
$sellStock = new SellStock($stock);

$broker = new Broker();
$broker->takeOrder($sellStock);
$broker->takeOrder($sellStock);
$broker->takeOrder($buyStock);
$broker->takeOrder($sellStock);
$broker->takeOrder($sellStock);
$broker->takeOrder($buyStock);
$broker->takeOrder($sellStock);
$broker->takeOrder($sellStock);

$broker->placeOrder();
