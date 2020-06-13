<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Noticias_eventos;
use AppBundle\Entity\NoticiasV2;
use AppBundle\Form\Noticias_eventosType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\HttpFoundation\Request;

class Noticias_eventos_controllerController extends Controller
{
    /**
     * Asocia un evento a una noticia
     * 
     * @Route("/eventosForm/{id}", name="asociarEvento")
     * @Method({"GET", "POST"})
     */
    public function crearEvento(Request $request, NoticiasV2 $noticia)
    {
        $em = $this->getDoctrine()->getManager();
        $evento = new Noticias_eventos();
        $idNoticia = $noticia->getId();

        $form = $this->createForm(Noticias_eventosType::class, $evento);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $idEventos = $form->get('idEventos')->getViewData();
            $evento->setIdNoticias($idNoticia);
            $evento->setIdEventos($idEventos);
            $em->persist($evento);
            $em->flush();

            return $this->redirectToRoute('noticias');
        }

        return $this->render('convivencia/eventos/eventosForm.html.twig', [
            'noticia' => $noticia,
            'form' => $form->createView(),
        ]);
    }
}
