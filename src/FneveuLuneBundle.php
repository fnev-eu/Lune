<?php

namespace Fneveu\Bundle\LuneBundle;

use Fneveu\Bundle\LuneBundle\DependencyInjection\FneveuLuneExtension;
use Symfony\Component\HttpKernel\Bundle\Bundle;

class FneveuLuneBundle extends Bundle
{
    public function getContainerExtension()
    {
        if (null === $this->extension) {
            $this->extension = new FneveuLuneExtension();
        }

        return $this->extension;
    }
}
