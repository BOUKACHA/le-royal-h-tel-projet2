<?php

namespace App\Controller;

use App\Entity\Salon;
use App\Form\SalonType;
use App\Repository\SalonRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/admin/salon')]
class AdminSalonController extends AbstractController
{
    #[Route('/', name: 'app_admin_salon_index', methods: ['GET'])]
    public function index(SalonRepository $salonRepository): Response
    {
        return $this->render('admin_salon/index.html.twig', [
            'salons' => $salonRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_admin_salon_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $salon = new Salon();
        $form = $this->createForm(SalonType::class, $salon);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($salon);
            $entityManager->flush();

            return $this->redirectToRoute('app_admin_salon_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('admin_salon/new.html.twig', [
            'salon' => $salon,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_admin_salon_show', methods: ['GET'])]
    public function show(Salon $salon): Response
    {
        return $this->render('admin_salon/show.html.twig', [
            'salon' => $salon,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_admin_salon_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Salon $salon, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(SalonType::class, $salon);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_admin_salon_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('admin_salon/edit.html.twig', [
            'salon' => $salon,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_admin_salon_delete', methods: ['POST'])]
    public function delete(Request $request, Salon $salon, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$salon->getId(), $request->request->get('_token'))) {
            $entityManager->remove($salon);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_admin_salon_index', [], Response::HTTP_SEE_OTHER);
    }
}
