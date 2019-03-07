<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class StPaulController extends AbstractController
{
    /**
     * @Route("/", name="st_paul")
     */
    public function index()
    {
        return $this->render('st_paul/index.html.twig', [
            'controller_name' => 'StPaulController',
        ]);
    }
}
