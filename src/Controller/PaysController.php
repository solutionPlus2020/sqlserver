<?php

namespace App\Controller;

use App\Entity\Pays;
use App\Form\PaysType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/pays")
 */
class PaysController extends AbstractController
{
    /**
     * @Route("/", name="pays_index", methods={"GET"})
     */
    public function index(): Response
    {
        $pays = $this->getDoctrine()
            ->getRepository(Pays::class)
            ->findAll();


        return $this->render('pays/index.html.twig', [
            'pays' => $pays,

        ]);
    }
    /**
     * @Route("/tri", name="pays_index_data", methods={"GET"})
     */
    public function indexDataTable(): Response
    {
        $pays = $this->getDoctrine()
            ->getRepository(Pays::class)
            ->findAll();

        return $this->render('pays/indexData.html.twig', [
            'pays' => $pays,

        ]);
    }

    /**
     * @Route("/new", name="pays_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $pay = new Pays();
        $form = $this->createForm(PaysType::class, $pay);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($pay);
            $entityManager->flush();
            $this->addFlash(
                'info',
                'Vous avez ajouté '.$pay->getLibpays().' !'

            );


            return $this->redirectToRoute('pays_index');
        }

        return $this->render('pays/new.html.twig', [
            'pay' => $pay,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{idpays}", name="pays_show", methods={"GET"})
     */
    public function show(Pays $pay): Response
    {
        $form = $this->createForm(PaysType::class, $pay);

        return $this->render('pays/show.html.twig', [
            'pay' => $pay,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{idpays}/edit", name="pays_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Pays $pay): Response
    {
        $form = $this->createForm(PaysType::class, $pay);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();
            $this->addFlash(
                'warning',
                'Vous avez modifié  '.$pay->getLibpays().' !'

            );

            return $this->redirectToRoute('pays_index');
        }

        return $this->render('pays/edit.html.twig', [
            'pay' => $pay,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{idpays}", name="pays_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Pays $pay): Response
    {
        if ($this->isCsrfTokenValid('delete'.$pay->getIdpays(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($pay);
            $entityManager->flush();
            $this->addFlash(
                'rose',
                'Vous avez supprimé '.$pay->getLibpays().' !'

            );
        }

        return $this->redirectToRoute('pays_index');
    }
}
