<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Sejour;
use \PDO;

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


    /**
     * @Route("/home", name="home")
     */
    public function home()
    {
        
        $repo = $this->getDoctrine()->getRepository(Sejour::class);
        $sejours = $repo->findAll();
        return $this->render('st_paul/st_paul.html.twig', [
            'controller_name' => 'HomeController.php',
            'sejours2' => $sejours
        ]);
        //$sejours2 = $bdd->query('select * from sejour order by sejno');
        /*return $this->render('st_paul/st_paul.html.twig', [
            'controller_name' => 'HomeController.php',
            //'sejours2' => $sejours2
        ]);
*/
    }
}
