<?php

namespace App\Controller;

use App\Entity\Agents;
use App\Form\AgentsType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;


/**
 * @Route("/agents")
 */
class AgentsController extends AbstractController
{
    /**
     * @Route("/", name="agents_index", methods={"GET"})
     */
    public function index(): Response
    {
        $agents = $this->getDoctrine()
            ->getRepository(Agents::class)
            ->findAll();

        return $this->render('agents/index.html.twig', [
            'agents' => $agents,
        ]);
    }

    /**
     * @Route("/new", name="agents_new", methods={"GET","POST"})
     */
    public function new(Request $request,UserPasswordEncoderInterface $passwordEncoder): Response
    {
        $agent = new Agents();
        $form = $this->createForm(AgentsType::class, $agent);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $agent->setMdp(
                $passwordEncoder->encodePassword(
                    $agent,  $form->get('plainPassword')->getData()
                )
            );
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($agent);
            $entityManager->flush();

            return $this->redirectToRoute('agents_index');
        }

        return $this->render('agents/new.html.twig', [
            'agent' => $agent,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{auId}", name="agents_show", methods={"GET"})
     */
    public function show(Agents $agent): Response
    {
        return $this->render('agents/show.html.twig', [
            'agent' => $agent,
        ]);
    }

    /**
     * @Route("/{auId}/edit", name="agents_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Agents $agent): Response
    {
        $form = $this->createForm(AgentsType::class, $agent);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('agents_index');
        }

        return $this->render('agents/edit.html.twig', [
            'agent' => $agent,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{auId}", name="agents_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Agents $agent): Response
    {
        if ($this->isCsrfTokenValid('delete'.$agent->getAuId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($agent);
            $entityManager->flush();
        }

        return $this->redirectToRoute('agents_index');
    }
}
