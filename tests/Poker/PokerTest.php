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

        $cards = array(
            ['Heart', 'A'],
            ['Diamond', '2'],
            ['Club', '5'],
            ['Spade', '3'],
            ['Spade', '4']
        );
        $this->assertEquals(false, $this->poker->isOnePair($cards));
    }

    /**
     * @test
     */
    public function isTwoPair()
    {
        $cards = array(
            ['Heart', 'A'],
            ['Diamond', '2'],
            ['Club', 'A'],
            ['Spade', '2'],
            ['Spade', '3']
        );
        $this->assertEquals(true, $this->poker->isTwoPair($cards));
    }
}