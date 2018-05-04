<?php

namespace clinicaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class clinicaController extends Controller
{
    public function indexAction()
    {
        return $this->render('clinica/index.html.twig');
    }
}
