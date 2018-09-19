<?php
class A{
    public static function who(){
        echo __CLASS__;
    }
    public static function test() {
        static::who();
    }
}
class B extends A{
    public static function who() {
        echo __CLASS__;
    }
}
B::test(); // B car static garde l'ancien valeur (parent) et si self A 