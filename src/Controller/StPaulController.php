<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\SEJOUR;
use \PDO;

class StPaulController extends AbstractController
{
    /**
     * @Route("/", name="st_paul")
     */
    public function index()
    {
        $repo = $this->getDoctrine()->getRepository(SEJOUR::class);
        $sejour = $repo->findAll();

        $bdd = new PDO('mysql:host=localhost;dbname=bdstpaul;charset=utf8', 'root');
		$sejours2 = $bdd->query('select * from sejour order by sejno');
        return $this->render('st_paul/st_paul.html.twig', [
            'sejours' => $sejour,
            'sejours2' => $sejours2
        ]);
    }
}
