<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class MainController extends AbstractController
{
    #[Route('/', name: 'main_home')]
    public function home(): Response
    {
        return $this->render('main/home.html.twig');
    }

    #[Route('/villes', name: 'main_villes')]
    public function ville(): Response
    {
        return $this->render('main/villes.html.twig');
    }

    #[Route('/sites', name: 'main_sites')]
    public function site(): Response
    {
        return $this->render('main/sites.html.twig');
    }

}