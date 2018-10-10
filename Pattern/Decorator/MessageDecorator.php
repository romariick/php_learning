<?php

require_once 'MessageDecorator.php';
require_once 'DisplayableInterface.php';


abstract class MessageDecorator implements DisplayableInterface
{
    protected $displayableMessage;

    public function __construct(DisplayableInterface $displayableMessage)
    {
        $this->displayableMessage = $displayableMessage;
    }
}
