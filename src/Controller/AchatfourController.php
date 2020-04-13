<?php

namespace App\Controller;

use App\Entity\Achatfour;
use App\Form\AchatfourType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/achatfour")
 */
class AchatfourController extends AbstractController
{
    /**
     * @Route("/", name="achatfour_index", methods={"GET"})
     */
    public function index(): Response
    {
        $achatfours = $this->getDoctrine()
            ->getRepository(Achatfour::class)
            ->findAll();

        return $this->render('achatfour/index.html.twig', [
            'achatfours' => $achatfours,
        ]);
    }

    /**
     * @Route("/new", name="achatfour_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $achatfour = new Achatfour();
        $form = $this->createForm(AchatfourType::class, $achatfour);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($achatfour);
            $entityManager->flush();

            return $this->redirectToRoute('achatfour_index');
        }

        return $this->render('achatfour/new.html.twig', [
            'achatfour' => $achatfour,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{seqresa}", name="achatfour_show", methods={"GET"})
     */
    public function show(Achatfour $achatfour): Response
    {
        return $this->render('achatfour/show.html.twig', [
            'achatfour' => $achatfour,
        ]);
    }

    /**
     * @Route("/{seqresa}/edit", name="achatfour_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Achatfour $achatfour): Response
    {
        $form = $this->createForm(AchatfourType::class, $achatfour);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('achatfour_index');
        }

        return $this->render('achatfour/edit.html.twig', [
            'achatfour' => $achatfour,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{seqresa}", name="achatfour_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Achatfour $achatfour): Response
    {
        if ($this->isCsrfTokenValid('delete'.$achatfour->getSeqresa(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($achatfour);
            $entityManager->flush();
        }

        return $this->redirectToRoute('achatfour_index');
    }
}
