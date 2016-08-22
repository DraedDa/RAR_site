<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use Symfony\Bundle\FrameworkBundle\Entity\Terrain;

class DefaultController extends Controller
{


    /**
     * @Route("/", name="index")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('index.php', [
            'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..'),
        ]);
    }

    /**
     * @Route("/contact", name="contact")
     */
    public function contactAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('contact.php', [
            'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..'),
        ]);
    }

    /**
     * @Route("/regles", name="regles")
     */
    public function reglesAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('regles.php', [
            'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..'),
        ]);
    }

    /**
     * @Route("/terrain", name="terrain")
     */
    public function terrainAction(Request $request)
    {
        $repository = $this
        ->getDoctrine()
        ->getManager()
        ->getRepository('FrameworkBundle:Terrain');

        $listTerrain = $repository->findAll();

        return $this->render('terrain.php', [
            'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..'),
            'listTerrain' => $listTerrain,
        ]);
    }

    /**
     * @Route("/showDetailTerrain/{id}", name="showDetailTerrain")
     */
    public function showDetailTerrainAction($id, Request $request)
    {
        $repository = $this
        ->getDoctrine()
        ->getManager()
        ->getRepository('FrameworkBundle:Terrain');

        $Terrain = $repository->find($id);

        return $this->render('showDetailTerrain.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..'),
            'Terrain' => $Terrain,
        ]);
    }

    /**
     * @Route("/agenda", name="agenda")
     */
    public function agendaAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('agenda.php', [
            'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..'),
        ]);
    }

    /**
     * @Route("/inscriptionPartie", name="inscriptionPartie")
     */
    public function inscriptionPartieAction(Request $request)
    {
        $user = $this->getUser();

        return $this->render('inscriptionPartie.php', [
            'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..'),
            'user' => $user,
        ]);
    }

        /**
     * @Route("/historiquePartie", name="historiquePartie")
     */
    public function historiquePartieAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('historiquePartie.php', [
            'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..'),
        ]);
    }
}

