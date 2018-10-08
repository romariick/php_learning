<?php

class SearchEngine implements SplObserver
{
    /**
     * @inheritdoc
     */
    public function update(SplSubject $subject)
    {
        echo("La classe SearchEngine a été alerté. L'article '" . $subject->getArticle()->getTitle() . "' a été crée.\n");

        // Ici dans un cas réel, on indexe le nouvel article
    }
}
