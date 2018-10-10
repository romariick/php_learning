<?php

require_once 'MessageDecorator.php';


class BoldMessage extends MessageDecorator
{
    public function display()
    {
        echo('<em>');
        $this->displayableMessage->display();
        echo('</em>').PHP_EOL;
    }
}
