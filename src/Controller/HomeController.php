<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{

    // On active les sessions
    private $session;

    public function __construct(SessionInterface $session)
    {
        $this->session = $session;
    }
    
    /**
     * @Route("/", name="home")
     */
    public function index()
    {

        // on rend la page d'accueil
        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController'
        ]);
        
    }
}

