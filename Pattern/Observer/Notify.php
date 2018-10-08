<?php

class Notify implements SplObserver
{
    /**
     * @inheritdoc
     */
    public function update(SplSubject $subject)
    {
        echo("La classe Notify a été alerté. L'article '" . $subject->getArticle()->getTitle() . "' a été crée.\n");

        // Ici dans un cas réel, on envoie un e-mail à tous les utilisateurs avec un lien vers le nouvel article
    }
}
