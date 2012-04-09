<?php

namespace Dioptra\LufincaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class DefaultController extends Controller
{
    
    public function estaticaAction($nombre)
    {
        return $this->render('LufincaBundle:Estaticas:'.$nombre.'.html.twig');
    }
}
