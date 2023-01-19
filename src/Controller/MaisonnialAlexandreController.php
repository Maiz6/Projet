<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MaisonnialAlexandreController extends AbstractController
{
    #[Route('/maisonnial/alexandre', name: 'app_maisonnial_alexandre')]
    public function index4(): Response
    {
        return $this->render('maisonnial_alexandre/index.html.twig', [
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
}
