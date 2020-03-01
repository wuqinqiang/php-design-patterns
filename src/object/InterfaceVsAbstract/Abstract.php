<?php

abstract class Logger
{
    protected $name;
    protected $enabled;
    protected $minPermittedLevel;

    public function __construct(string $name, bool $enabled, int $minPermittedLevel)
    {
        $this->name = $name;
        $this->enabled = $enabled;
        $this->minPermittedLevel = $minPermittedLevel;
    }

    public function log(int $level, $message)
    {
        $canLog = $this->enabled && $this->minPermittedLevel < $level;
        if (!$canLog) return;
        $this->doLog($message);
    }

    abstract function doLog(string $message);
}

class FileLog extends Logger
{
    public function doLog($message)
    {
        var_dump($this->name . ' say: ' . $message);
    }
}

class QueueLog extends Logger
{
    public function doLog($message)
    {
        var_dump($this->name . ' say: ' . $message);
    }
}

$file = new FileLog('张三', true, 5);
$queue = new FileLog('李四', false, 5);

$file->log(10, 'hello world');
$queue->log(4, 'no hello');

