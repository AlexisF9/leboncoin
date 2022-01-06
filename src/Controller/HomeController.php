<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Twig\Environment;

class HomeController extends AbstractController
{
    /**
     * @Route("/")
     * @return Response
     */
    public function homepage(Environment    $twig)
    {
        $bonjour = 'Bonjour';

        return $this->render('Frontend/home.html.twig', ['bonjour' => $bonjour]);
    }
}