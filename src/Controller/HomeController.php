<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Sejour;
use \PDO;

class HomeController extends AbstractController
{
     /**
     * @Route("/home", name="home")
     */
    public function index()
    {
        return $this->render('st_paul/st_paul.html.twig', [
            'controller_name' => 'HomeController.php',
        ]);
        /*
        $repo = $this->getDoctrine()->getRepository(Sejour::class);
        $sejour = $repo->findAll();

        $bdd = new PDO('mysql:host=localhost;dbname=bdstpaul;charset=utf8', 'root');
		$sejours2 = $bdd->query('select * from sejour order by sejno');
        return $this->render('st_paul/st_paul.html.twig', [
            'sejours' => $sejour,
            'sejours2' => $sejours2
        ]);*/
    }
}
