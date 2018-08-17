<?php

namespace Poker;

use PHPUnit\Framework\TestCase;

use Poker\Card;

class CardTest extends TestCase
{
    /**
     * @test
     */
    public function constructor()
    {
        $card = new Card('Heart', 1);

        $this->assertEquals('Heart', $card->getSuit());
        $this->assertEquals(1, $card->getRank());
    }
}