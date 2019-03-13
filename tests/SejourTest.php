<?php

namespace App\Tests;


use App\Entity\Sejour;
use PHPUnit\Framework\TestCase;
use App\Tests\DateTimeInterface;

/**
 * Class SejourTest
 */
class SejourTest extends TestCase
{
	/**
     * @varSejour
     */
	protected $object;
	/**
     * Sets up the fixture, for example, opens a network connection.
     * This methodiscalledbefore a test isexecuted.
     */
	protected function setUp()
    	{
        $this->object = new Sejour(1, 'Classe de mer', 170, '2016-05-02', 10);
        $date = new date();
        $this->object->setSejdtedeb(new DateTimeInterface('2016-05-02'));
        }
        

	/**
     * Tears down the fixture, for example, closes a network connection.
     * This methodiscalledafter a test isexecuted.
     */
	protected function tearDown()
    {
    }
     /**
     * Test de la méthode getSejDteFin de la classe Sejour
     */
	public function testDteFin()
    {
	$this->setUp();

	$resultatAttendu = '2016-05-12';
	$resultatObserve = $this->object->getSejDteFin();

	$this->assertEquals($resultatAttendu, $resultatObserve);

    }

    
}
