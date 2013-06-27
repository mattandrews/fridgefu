<?php

namespace Matthan\Bundle\CookingBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('MatthanCookingBundle:Default:index.html.twig', array('name' => $name));
    }
}
