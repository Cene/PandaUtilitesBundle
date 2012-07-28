<?php

namespace Cene\Bundle\CenePandaUtilitiesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('CenePandaUtilitiesBundle:Default:index.html.twig', array('name' => $name));
    }
}
