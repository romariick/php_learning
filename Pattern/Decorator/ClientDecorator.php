<?php

require_once 'BoldMessage.php';
require_once 'ClientDecorator.php';
require_once 'DisplayableInterface.php';
require_once 'MessageDecorator.php';
require_once 'Message.php';

$message = new Message('Message bold');
$messageDecore = new BoldMessage($message);
$messageDecore->display();
