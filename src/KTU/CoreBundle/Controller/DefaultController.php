<?php

namespace KTU\CoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('KTUCoreBundle:Default:index.html.twig', array('name' => $name));
    }
}
