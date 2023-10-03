<?php

namespace App\Controller;

use App\Entity\Chambre;
use App\Form\ChambreType;
use App\Repository\ChambreRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\String\Slugger\SluggerInterface;

#[Route('/admin/chambre')]
class AdminChambreController extends AbstractController
{
    #[Route('/', name: 'app_admin_chambre_index', methods: ['GET'])]
    public function index(ChambreRepository $chambreRepository): Response
    {
        return $this->render('admin_chambre/index.html.twig', [
            'chambres' => $chambreRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_admin_chambre_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager, SluggerInterface $sluggerInterface): Response
    {
        // On instancie un nouvel objet chambre
        $chambre = new Chambre();
        // On crée un formulaire de chambre en utilisant la classe chambreType
        $form = $this->createForm(ChambreType::class, $chambre);
        // On traite le formulaire
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $chambre->setSlug($sluggerInterface->slug(strtolower($chambre->getNom())));

            // On enregistre en base de données
            $entityManager->persist($chambre);
            $entityManager->flush();

            return $this->redirectToRoute('app_admin_chambre_index', [], Response::HTTP_SEE_OTHER);
        }
        // Si le formulaire n'est pas soumis, on affiche le formulaire
        return $this->renderForm('admin_chambre/new.html.twig', [
            'chambre' => $chambre,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_admin_chambre_show', methods: ['GET'])]
    public function show(Chambre $chambre): Response
    {
        return $this->render('admin_chambre/show.html.twig', [
            'chambre' => $chambre,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_admin_chambre_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Chambre $chambre, EntityManagerInterface $entityManager,SluggerInterface $sluggerInterface): Response
    {
        $form = $this->createForm(ChambreType::class, $chambre);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $chambre->setSlug($sluggerInterface->slug(strtolower($chambre->getNom())));
            $entityManager->persist($chambre);
            $entityManager->flush();
        
            return $this->redirectToRoute('app_admin_chambre_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('admin_chambre/edit.html.twig', [
            'chambre' => $chambre,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_admin_chambre_delete', methods: ['POST'])]
    public function delete(Request $request, Chambre $chambre, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$chambre->getId(), $request->request->get('_token'))) {
            $entityManager->remove($chambre);
            $entityManager->flush();
            // On crée un message flash (le message flsh est mis en session et est supprimé dès qu'il est affiché)
            $this->addFlash('success', 'la chambre a bien été supprimée');

        }

        return $this->redirectToRoute('app_admin_chambre_index', [], Response::HTTP_SEE_OTHER);
    }
}
