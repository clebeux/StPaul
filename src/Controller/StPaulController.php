<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\SEJOUR;

class StPaulController extends AbstractController
{
    /**
     * @Route("/", name="st_paul")
     */
    public function index()
    {
        $repo = $this->getDoctrine()->getRepository(SEJOUR::class);
        $essai = $repo->findAll();
        return $this->render('st_paul/st_paul.html.twig', [
            'essai' => $essai
        ]);
    }
}
