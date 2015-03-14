<?php
class Singleton
{
    public static function getInstance()
    {
        static $instance = null;
        if (null === $instance) 
        {
            $instance = new static();
        }

        return $instance;
    }
    protected function __construct()
    {
    }
    
    private function __clone()
    {
    }
    
    private function __wakeup()
    {
    }
}

class SingletonChild extends Singleton
{
}

$1 = Singleton::getInstance();
var_dump($1 === Singleton::getInstance());        

$2 = SingletonChild::getInstance();
var_dump($2 === Singleton::getInstance());    

var_dump($2 === SingletonChild::getInstance());