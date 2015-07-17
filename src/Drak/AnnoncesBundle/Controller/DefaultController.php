<?php

namespace Drak\AnnoncesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('DrakAnnoncesBundle:Default:index.html.twig', array('name' => $name));
    }
}
