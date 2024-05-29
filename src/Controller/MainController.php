<?php

// src/Controller/MainController.php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Form\LoginFormType;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class MainController extends AbstractController
{
#[Route('/', name: 'main_home')]
public function home(Request $request, AuthenticationUtils $authenticationUtils): Response
{
$form = $this->createForm(LoginFormType::class);

// Obtenez l'erreur de connexion s'il y en a une
$error = $authenticationUtils->getLastAuthenticationError();

// Dernier identifiant saisi par l'utilisateur
$lastUsername = $authenticationUtils->getLastUsername();

return $this->render('main/home.html.twig', [
'titre' => 'Bienvenue sur la page d\'accueil',
'loginForm' => $form->createView(),
'last_username' => $lastUsername,
'error' => $error,
]);
}
}