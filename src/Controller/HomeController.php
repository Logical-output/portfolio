<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController
{
    #[Route('/', name: 'app_home', methods: 'GET')]
    public function home(): Response
    {
        $welcome = 'Welcome to your new website Akili Daniels';

        return new Response($welcome);
    }
}