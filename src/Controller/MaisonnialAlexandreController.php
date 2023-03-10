<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MaisonnialAlexandreController extends AbstractController
{
    #[Route('/loisirs', name: 'app_maisonnial_alexandre')]
    public function index4(): Response
    {
        return $this->render('loisirs.html.twig', [
            'controller_name' => 'MaisonnialAlexandreController',
        ]);
    }

    #[Route('/cv', name: 'app_maisonnial_alexandre2')]
    public function maisonnial2(): Response
    {
        return $this->render('cv.html.twig', [
            'controller_name' => 'MaisonnialAlexandreController',
        ]);
    }

    #[Route('/test', name: 'test')]
    public function index(): Response
    {
        return $this->render('index1.html.twig', [
            'controller_name' => 'MaisonnialAlexandreController',
        ]);
    }

    #[Route('/competences', name: 'portfolio')]
    public function index2(): Response
    {
        return $this->render('portfolio.html.twig', [
            'controller_name' => 'MaisonnialAlexandreController',
        ]);
    }
}
