<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use App\Entity\SEJOUR;

class SejourFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
         $sejour = new SEJOUR();
         $sejour->setPosition("left")
                ->setValue("
                <h2>Madame, Monsieur,</h2>
			<p>
				Votre enfant va partir durant l'année scolaire en classe de découverte.
				<br />Une participation financière par enfant va prochainement vous être demandée.
				<br /><br />Cette année le conseil municipal a décidé d'instaurer trois types de réductions
				et un plafonnement à 100 Euros par enfant.
			</p>
			<br />
			<ul>
				<li>Réduction de 10% si le Quotient Familial est inférieur à 500 Euros</li>
				<li>Réduction de 20% pour famille de 2 enfants</li>
				<li>Réduction de 40% pour famille de 3 enfants ou plus</li>
			</ul>
                
                ");
		/*
				$bdd = new PDO('mysql:host=localhost;dbname=bdstpaul;charset=utf8', 'root');
				$sejours = $bdd->query('select * from sejour order by sejno');
				foreach ($sejours as $sejour):
					<sejour>
						<h2><p>echo $sejour['SEJINTITULE']</p></h2>
						echo $sejour['SEJMONTANTMBI'].'€' ?><BR/>
						echo 'A partir du '.$sejour['SEJDTEDEB'] ?>
						echo $sejour['SEJDUREE'].' nuits' ?>
					</sejour>
				endforeach

				$sejour->setPosition("right")
                ->setValue("<h2>Liste des séjours prévus </h2>
				<fieldset>
				
				</fieldset>");*/

         $manager->persist($sejour);

        $manager->flush();
    }
}
