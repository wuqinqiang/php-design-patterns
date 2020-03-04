<?php

namespace Remember\Patterns\object\patterns;

final class Singleton2
{
    private static $instance;

    /**
     * @return Singleton2
     * 唯一获取单例入口
     */
    public static function getInstance()
    {
        if (self::$instance === null) {
            self::$instance = new static();
        }
        return self::$instance;
    }
    
    private function __construct()
    {

    }

    private function __clone()
    {
        // TODO: Implement __clone() method.
    }


    private function __wakeup()
    {
        // TODO: Implement __wakeup() method.
    }
}
