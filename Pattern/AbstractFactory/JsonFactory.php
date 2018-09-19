<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of JsonFactory
 *
 * @author Romaric
 */
class JsonFactory extends AbstractFactory {
    
    public function createText($content) {
        return new JsonText($content);
    }

}
