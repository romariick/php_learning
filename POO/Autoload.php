<?php

class Autoload
{
    public function __construct()
    {
    }
    public static function autoload($class_name)
    {
        require_once "Autoload/$class_name.php";
    }
    public static function register()
    {
        spl_autoload_register(array(__CLASS__, 'autoload'));
    }
}
