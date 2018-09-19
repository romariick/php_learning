<?php


abstract class HirringManager
{
    abstract public function makeIntervier();

    public function takeInterviewer()
    {
        $interviewer = $this->makeIntervier();
        $interviewer->asQuestion();
    }
}
