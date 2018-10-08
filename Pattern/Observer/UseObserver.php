<?php


require_once 'Article.php';
require_once 'SearchEngine.php';
require_once 'Notify.php';
require_once 'ArticleManager.php';

$notify = new Notify();
$searchEngine = new SearchEngine();

$articleManager = new ArticleManager();
$articleManager->attach($notify);
$articleManager->attach($searchEngine);

$article = new Article();
$article->setTitle('Titre de l\'article n°1');

$articleManager->create($article);
