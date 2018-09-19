<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of HirringManager
 *
 * @author Romaric
 */
abstract class HirringManager {
    
    abstract public function makeIntervier();
    
    public function takeInterviewer(){
        $interviewer = $this->makeIntervier();
        $interviewer->asQuestion();
    }
}
