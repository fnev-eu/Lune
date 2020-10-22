<?php

namespace Fneveu\Bundle\LuneBundle\Controllre;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class LuneController extends AbstractController
{
    /**
     * @Route("/{entityName}", name="lune_admin")
     * @param string|null $entityName
     */
    public function index(?string $entityName = null)
    {
        return $this->render('@Lune/page/index.html.twig');
    }
}
