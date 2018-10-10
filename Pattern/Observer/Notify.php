<?php

class Notify implements SplObserver
{
    /**
     * @inheritdoc
     */
    public function update(SplSubject $subject)
    {
        echo("La classe Notify a été alerté. L'article '" . $subject->getArticle()->getTitle() . "' a été crée.\n");
    }
}
