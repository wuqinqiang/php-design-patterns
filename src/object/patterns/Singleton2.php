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

    /**
     * Singleton2 constructor.
     * 不允许外部去创建这个实例
     */
    private function __construct()
    {

    }

    /**
     * 防止实例的克隆,这样会创建实例的副本
     */
    private function __clone()
    {
        // TODO: Implement __clone() method.
    }


    /**
     * 防止反序列化
     */
    private function __wakeup()
    {
        // TODO: Implement __wakeup() method.
    }
}
