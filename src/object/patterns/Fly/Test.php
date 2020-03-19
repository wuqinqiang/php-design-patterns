<?php

namespace Remember\Patterns\object\patterns\Fly;

class Test
{

    private $characters = ['a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k',
        'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z'];

    private $fonts = ['Arial', 'Times New Roman', 'Verdana', 'Helvetica'];

    public function test()
    {
        $factory = new FlyweightFactory();
        foreach ($this->characters as $character) {
            foreach ($this->fonts as $font) {
                $flyWeight = $factory->get($character);
                $flyWeight->render($font);
                sprintf('Character %s with font %s', $character, $font);
            }
        }

        $res = count($this->characters);
        $res2 = count($factory);

        echo $res.PHP_EOL;
        echo $res2.PHP_EOL;

    }
}