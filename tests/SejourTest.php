<?php

namespace App\Tests;

use App\Entity\Sejour;
use PHPUnit\Framework\TestCase;

class SejourTest extends TestCase
{
    protected function setUpPourcentReduc()
    	{
            $this->object = new Sejour(1, 'Classe de mer', 170, '2016-05-02', 10);

            //Familial
            $this->objectPourcentFamilial = $this->object->PourcentFamilial(100);


            //2 enfants
            $this->objectPourcent2Enfants = $this->object->Pourcent2Enfants(100);
            


            //3 enfants
            $this->objectPourcent3Enfants = $this->object->Pourcent3Enfants(100);
            
        
        }

    public function testPourcentReduc()
    {
        $this->setUpPourcentReduc();


        //Familial
        $resultatObserve = $this->objectPourcentFamilial;
        $resultatAttendu = 10;

        $this->assertEquals($resultatAttendu, $resultatObserve);


        //2 enfants
        $resultatObserve = $this->objectPourcent2Enfants;
        $resultatAttendu = 20;

        $this->assertEquals($resultatAttendu, $resultatObserve);


        //3 enfants
        $resultatObserve = $this->objectPourcent3Enfants;
        $resultatAttendu = 40;

        $this->assertEquals($resultatAttendu, $resultatObserve);
        
    }












    public function testSomething()
    {
        $this->assertTrue(true);
    }
}
