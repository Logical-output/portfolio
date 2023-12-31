<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    #[Route('/', name: 'app_home', methods: ['GET'])]
    public function home(): Response
    {
        $welcome = 'Welcome! To your new website Akili Daniels';

        return $this->render('home/home.html.twig', [
            'welcome' => $welcome,
        ]);
    }
}