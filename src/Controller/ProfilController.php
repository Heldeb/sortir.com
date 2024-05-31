<?php

namespace App\Controller;

use App\Entity\Participant;
use App\Form\ProfilType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class ProfilController extends AbstractController
{
    #[Route('/profil', name: 'app_profil')]
    public function profil(Request $request, EntityManagerInterface $entityManager): Response
    {
        $user = new  Participant();
        $participantForm = $this->createForm(ProfilType::class, $user);
        $participantForm->handleRequest($request);

        if($participantForm->isSubmitted()&&$participantForm->isValid()){

            $entityManager->persist($user);
            $entityManager->flush();
        }
        return $this->render('profil/profil.html.twig', [
            'participantForm'=> $participantForm->createView()
        ]);
    }
}
