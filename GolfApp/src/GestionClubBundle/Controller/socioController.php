<?php

namespace GestionClubBundle\Controller;
use GestionClubBundle\Entity\socio;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Socio controller.
 *
 */
class socioController extends Controller
{
    /**
     * Lists all socio entities.
     *
     */
    public function indexAction(Request $request)
    {
        
            $em = $this->getDoctrine()->getManager();

        $socios = $em->getRepository('GestionClubBundle:socio')->findAll();
        
        #-----
        $paginator  = $this->get('knp_paginator');
        $pagination = $paginator->paginate(
        $socios, /* query NOT result */
        $request->query->getInt('page', 1)/*page number*/,
        3/*limit per page*/
    );
        
        #----
        
        
        
        
    

        return $this->render('socio/index.html.twig', array(
            'socios' => $pagination,
        ));
    }

    /**
     * Creates a new socio entity.
     *
     */
    public function newAction(Request $request)
    {
        $socio = new Socio();
        $form = $this->createForm('GestionClubBundle\Form\socioType', $socio);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($socio);
            $em->flush();

            return $this->redirectToRoute('socio_show', array('id' => $socio->getId()));
        }

        return $this->render('socio/new.html.twig', array(
            'socio' => $socio,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a socio entity.
     *
     */
    public function showAction(socio $socio)
    {
        $deleteForm = $this->createDeleteForm($socio);

        return $this->render('socio/show.html.twig', array(
            'socio' => $socio,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing socio entity.
     *
     */
    public function editAction(Request $request, socio $socio)
    {
        $deleteForm = $this->createDeleteForm($socio);
        $editForm = $this->createForm('GestionClubBundle\Form\socioType', $socio);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('socio_edit', array('id' => $socio->getId()));
        }

        return $this->render('socio/edit.html.twig', array(
            'socio' => $socio,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a socio entity.
     *
     */
    public function deleteAction(Request $request, socio $socio)
    {
        $form = $this->createDeleteForm($socio);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($socio);
            $em->flush();
        }

        return $this->redirectToRoute('socio_index');
    }

    /**
     * Creates a form to delete a socio entity.
     *
     * @param socio $socio The socio entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(socio $socio)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('socio_delete', array('id' => $socio->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
    
    
    
    
    
    
    
   
    
    
}
