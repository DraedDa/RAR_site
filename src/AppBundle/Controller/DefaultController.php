<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;

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
    public function terrainxAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('terrain.php', [
            'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..'),
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

