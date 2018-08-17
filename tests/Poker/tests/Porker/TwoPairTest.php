<?php

namespace Poker;

use PHPUnit\Framework\TestCase;
use Poker\TwoPair;

class TwoPairTest extends TestCase
{
    /**
     * @test
     */
    public function match()
    {
        $cards = array(
            ['Heart', 'A'],
            ['Diamond', '2'],
            ['Club', 'A'],
            ['Spade', '2'],
            ['Spade', '3']
        );
        $hand = new TwoPair($cards);
        $this->assertEquals(true, $hand->match());

        $cards = array(
            ['Heart', 'A'],
            ['Diamond', '2'],
            ['Club', 'A'],
            ['Spade', '5'],
            ['Spade', '3']
        );
        $hand = new TwoPair($cards);
        $this->assertEquals(false, $hand->match());
    }
}