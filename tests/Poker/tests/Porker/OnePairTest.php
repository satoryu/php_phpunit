<?php

namespace Poker;

use PHPUnit\Framework\TestCase;
use Poker\OnePair;

class OnePairTest extends TestCase
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
            ['Spade', '3'],
            ['Spade', '4']
        );
        $hand = new OnePair($cards);

        $this->assertEquals(true, $hand->match());

        $cards = array(
            ['Heart', 'A'],
            ['Diamond', '2'],
            ['Club', '5'],
            ['Spade', '3'],
            ['Spade', '4']
        );
        $hand = new OnePair($cards);

        $this->assertEquals(false, $hand->match());
    }
}