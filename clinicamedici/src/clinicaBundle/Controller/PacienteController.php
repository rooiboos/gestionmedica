<?php

namespace clinicaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Session;
use clinicaBundle\Entity\Paciente;
use clinicaBundle\Form\PacienteType;


class PacienteController extends Controller
{
	private $session;
	
	public function __construct() {
		$this->session=new Session();
	}

	public function loginAction(Request $request){
		$authenticationUtils = $this->get("security.authentication_utils");
		$error = $authenticationUtils->getLastAuthenticationError();
		$lastUsername = $authenticationUtils->getLastUsername();
		
		$paciente = new Paciente();
		$form = $this->createForm(PacienteType::class,$paciente);
		
		$form->handleRequest($request);
		if($form->isSubmitted()){
			if($form->isValid()){
				$em=$this->getDoctrine()->getEntityManager();
				$paciente_repo=$em->getRepository("clinicaBundle:paciente");
				$paciente = $paciente_repo->findOneBy(array("email"=>$form->get("email")->getData()));
				
				if(count($paciente)==0){
					$paciente = new Paciente();
					$paciente->setName($form->get("nombre")->getData());
					$paciente->setSurname($form->get("apellido")->getData());
					$paciente->setEmail($form->get("email")->getData());

					$factory = $this->get("security.encoder_factory");
					$encoder = $factory->getEncoder($paciente);
					$password = $encoder->encodePassword($form->get("password")->getData(), $paciente->getSalt());

					$paciente->setPassword($password);
					$paciente->setRole("ROLE_USER");
					#$user->setImagen(null);

                                        // upload file
				$file=$form["imagen"]->getData();
				
				if(!empty($file) && $file!=null){
					$ext=$file->guessExtension();
					$file_name=time().".".$ext;
					$file->move("uploads",$file_name);

					$paciente->setImagen($file_name);
				}else{
					$paciente->setImagen(null);
				}
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        
					$em = $this->getDoctrine()->getEntityManager();
					$em->persist($paciente);
					$flush = $em->flush();
					if($flush==null){
						$status = "El usuario se ha creado correctamente";
					}else{
						$status = "No te has registrado correctamente";
					}
				}else{
					$status = "El usuario ya existe!!!";
				}
			}else{
				$status = "No te has registrado correctamente";
			}

			$this->session->getFlashBag()->add("status",$status);
		}
		return $this->render("paciente/login.html.twig", array(
			"error" => $error,
			"last_username" => $lastUsername,
			"form" => $form->createView()
		)); 
	}
}
