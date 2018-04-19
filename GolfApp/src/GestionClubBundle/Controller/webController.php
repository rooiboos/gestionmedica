<?php

namespace GestionClubBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;


use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;




/**
 * web controller.
 *
 */
class webController extends Controller
{
    /**
     * Lists all web entities.
     *
     */
    public function indexAction()
    {
        

        return $this->render('web/index.html.twig');
    }

    
    public function restauranteAction()
    {
        

        return $this->render('web/restaurante.html.twig');
    }
    
     public function hotelAction()
    {
        

        return $this->render('web/hotel.html.twig');
    }
    
    public function contactoAction()
    {
        

        return $this->render('web/contacto.html.twig');
    }
    
    

    
    
    
    
   

    
}