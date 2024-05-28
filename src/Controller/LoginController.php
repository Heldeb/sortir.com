<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/login', name: 'login')]

class LoginController extends AbstractController
{
    #[Route('', name: '_connexion')]
    public function connexion(): Response
    {
        return $this->render('login/connexion.html.twig');
    }
}