<?php

namespace Matthan\Bundle\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('MatthanAdminBundle:Default:index.html.twig', array('name' => $name));
    }
}
