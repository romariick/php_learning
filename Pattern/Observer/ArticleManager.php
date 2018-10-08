<?php

class ArticleManager implements SplSubject
{
    /**
     * @var Article
     */
    private $article;

    /**
     * SplObjectStorage pour s'assurer de l'unicité des observateurs.
     *
     * @var SplObjectStorage
     */
    protected $observers;

    public function __construct()
    {
        $this->observers = new SplObjectStorage();
    }

    /**
     * @inheritdoc
     */
    public function attach(SplObserver $observer)
    {
        $this->observers->attach($observer);
    }

    /**
     * @inheritdoc
     */
    public function detach(SplObserver $observer)
    {
        $this->observers->detach($observer);
    }

    /**
     * @inheritdoc
     */
    public function notify()
    {
        foreach ($this->observers as $observer) {
            $observer->update($this);
        }
    }

    /**
     * Crée un article dans la base de données et alerte les observateurs.
     *
     * @param Article $article
     */
    public function create(Article $article)
    {
        $this->article = $article;

        $this->notify();
    }

    /**
     * @return Article
     */
    public function getArticle()
    {
        return $this->article;
    }
}
