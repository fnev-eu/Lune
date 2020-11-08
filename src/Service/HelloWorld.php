<?php

namespace Fneveu\Bundle\LuneBundle\Service;

class HelloWorld
{
    public function sayHello($name = null)
    {
        return 'Hello ' . ($name ?: 'World') . '!';
    }
}
