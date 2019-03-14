<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Sejour;

class SimulController extends AbstractController
{
    /**
     * @Route("/simul", name="simul")
     */
    public function index()
    {
        $repo = $this->getDoctrine()->getRepository(Sejour::class);
        $sejours = $repo->findAll();
        $montant = "";
        return $this->render('simul/simul.html.twig', [
            'controller_name' => 'SimulController',
            'sejours' => $sejours,
            'montant' => $montant
        ]);
    }
}
