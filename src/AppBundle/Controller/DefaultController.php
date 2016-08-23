<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;

use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;


class DefaultController extends Controller
{


    /**
     * @Route("/", name="index")
     */
    public function indexAction(Request $request)
    {

        return $this->render('index.php', [
            'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..'),
        ]);
    }

    /**
     * @Route("/contact", name="contact")
     */
    public function contactAction(Request $request)
    {

        return $this->render('contact.php', [
            'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..'),
        ]);
    }

    /**
     * @Route("/regles", name="regles")
     */
    public function reglesAction(Request $request)
    {

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
        ->getRepository('AppBundle:Terrain');

        $listTerrain = $repository->findAll();

        return $this->render('terrain.php', [
            'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..'),
            'listTerrain' => $listTerrain,
        ]);
    }

    /**
     * @Route("/showDetailTerrain/{titre}", name="showDetailTerrain")
     */
    public function showDetailTerrainAction($titre, Request $request)
    {
        $repository = $this
        ->getDoctrine()
        ->getManager()
        ->getRepository('AppBundle:Terrain');

        $Terrain = $repository->findOneByTitre($titre);
        
        if ($Terrain == null) {
            throw new NotFoundHttpException("terrain non trouvé");
        }
        else {
            return $this->render('showDetailTerrain.html.twig', [
                'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..'),
                'Terrain' => $Terrain,
            ]);
        }
    }

    /**
     * @Route("/agenda", name="agenda")
     */
    public function agendaAction(Request $request)
    {

        return $this->render('agenda.php', [
            'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..'),
        ]);
    }



    /**
     * @Route("inscriptionPartieIndex", name="inscriptionPartieIndex")
     */
    public function inscriptionPartieIndexAction(Request $request)
    {

        $repository = $this
        ->getDoctrine()
        ->getManager()
        ->getRepository('AppBundle:Partie');

        $Parties = $repository->findByetatPartie("actif");


        return $this->render('inscriptionPartieIndex.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..'),
            'Parties'=> $Parties,
        ]);

        
    }

    /**
     * @Route("/inscriptionPartie", name="inscriptionPartie")
     */
    public function inscriptionPartieAction(Request $request)
    {

        $repository = $this
        ->getDoctrine()
        ->getManager()
        ->getRepository('AppBundle:Partie');

        $partieName = $request->query->get('partieName');
        $partie = $repository->findOneBypartieName($partieName);
        $user = $this->getUser();

        return $this->render('inscriptionPartie.php', [
            'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..'),
            'user' => $user,
            'Partie' => $partie,

        ]);

    }

    /**
     * @Route("/historiquePartie", name="historiquePartie")
     */
    public function historiquePartieAction(Request $request)
    {

        return $this->render('historiquePartie.php', [
            'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..'),
        ]);
    }
}

