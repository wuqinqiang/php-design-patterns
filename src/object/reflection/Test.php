<?php

namespace Remember\Patterns\object\reflection;

class Test
{
    public function make(string $classname)
    {
        $class = new \ReflectionClass($classname);
        $constructors = $class->getConstructor();
        $parameters = $constructors->getParameters();
        $depends = $this->getDepends($parameters);

        return $class->newInstanceArgs($depends);
    }

    public function getDepends(array $params)
    {
        $depends = [];
        foreach ($params as $param) {
            $class = $param->getClass();
            if (is_null($class)) {
                if ($param->isDefaultValueAvailable()) {
                    $depends[] = $param->getDefaultValue();
                } else {
                    $depends[] = '0';
                }
            } else {
                $depends[] = $this->make($param->getClass()->name);
            }
        }
        return $depends;
    }
}