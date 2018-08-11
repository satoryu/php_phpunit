<?php
namespace Poker;

use PHPUnit\Framework\TestCase;
use Poker\Poker;

class PokerTest extends TestCase
{
    private $porker;

    public function setUp()
    {
        $this->poker = new Poker();
    }

    /**
    * @test
    */
    public function isOnePair()
    {
        $cards = array(
            ['Heart', 'A'],
            ['Diamond', '2'],
            ['Club', 'A'],
            ['Spade', '3'],
            ['Spade', '4']
        );

        $this->assertEquals(true, $this->poker->isOnePair($cards));
    }
}