<?php

final class Singleton
{
    private static $instance;
    
    public static function getInstance()
    {
        if (null === self::$instance) {
            static::$instance = new static();
        }
        return static::$instance;
    }
}
