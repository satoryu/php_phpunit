<?php
namespace Tddbc;

use PHPUnit\Framework\TestCase;
use Tddbc\Poker;

class PorkerTest extends TestCase
{
    private $porker;

    public function setUp()
    {
        $this->porker = new Poker();
    }

    /**
    * @test
    */
    public function isOnePair()
    {
        $this->assertEquals(true, true);
    }
}