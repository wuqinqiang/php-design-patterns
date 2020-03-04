<?php

namespace Remember\Patterns\object\patterns;

final class Singleton1
{
    private static $instance;

    private $param1;
    private $param2;

    /**
     * @return Singleton1
     * 唯一获取单例入口
     */
    public static function getInstance($param1, $param2)
    {
        if (self::$instance === null) {
            self::$instance = new static($param1, $param2);
        }
        return self::$instance;
    }

    private function __construct($param1, $param2)
    {
        $this->param1 = $param1;
        $this->param2 = $param2;
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
