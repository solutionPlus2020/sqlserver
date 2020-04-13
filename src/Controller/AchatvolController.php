<?php

namespace App\Controller;

use App\Entity\Achatvol;
use App\Form\AchatvolType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/achatvol")
 */
class AchatvolController extends AbstractController
{
    /**
     * @Route("/", name="achatvol_index", methods={"GET"})
     */
    public function index(): Response
    {
        $achatvols = $this->getDoctrine()
            ->getRepository(Achatvol::class)
            ->findAll();

        return $this->render('achatvol/index.html.twig', [
            'achatvols' => $achatvols,
        ]);
    }

    /**
     * @Route("/new", name="achatvol_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $achatvol = new Achatvol();
        $form = $this->createForm(AchatvolType::class, $achatvol);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($achatvol);
            $entityManager->flush();

            return $this->redirectToRoute('achatvol_index');
        }

        return $this->render('achatvol/new.html.twig', [
            'achatvol' => $achatvol,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{seqfact}", name="achatvol_show", methods={"GET"})
     */
    public function show(Achatvol $achatvol): Response
    {
        return $this->render('achatvol/show.html.twig', [
            'achatvol' => $achatvol,
        ]);
    }

    /**
     * @Route("/{seqfact}/edit", name="achatvol_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Achatvol $achatvol): Response
    {
        $form = $this->createForm(AchatvolType::class, $achatvol);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('achatvol_index');
        }

        return $this->render('achatvol/edit.html.twig', [
            'achatvol' => $achatvol,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{seqfact}", name="achatvol_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Achatvol $achatvol): Response
    {
        if ($this->isCsrfTokenValid('delete'.$achatvol->getSeqfact(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($achatvol);
            $entityManager->flush();
        }

        return $this->redirectToRoute('achatvol_index');
    }
}
