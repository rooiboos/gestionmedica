<?php

namespace clinicaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('clinicaBundle:Default:index.html.twig');
    }
}
