<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

class HomeController {

    #[Route('/')]
    public function accueil() : Response {
        return new Response('<h1>Page d\'accueil</h1>');
    }
}