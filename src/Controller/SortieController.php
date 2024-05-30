<?php

namespace App\Controller;

use App\Repository\SortieRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;


#[Route('/sorties', name: 'sortie_')]

class SortieController extends AbstractController
{
    #[Route('', name: 'list')]

    public function list(SortieRepository $sortieRepository): Response
    {
        $sorties = $sortieRepository->findAll();
        //$sorties = $sortieRepository->findBy([], ['idSite' => 'ASC', 'vote' => 'DESC'], 30);
        return $this->render('sortie/list.html.twig', [
            "sorties" => $sorties
        ]);
    }

    /*
    #[Route('/details/{id}', name: 'details')]
        
    public function details(): Response
    {

        // TODO : aller chercher la sortie en BDD

        return $this->render('sortie/details.html.twig');
    }
        */
}
