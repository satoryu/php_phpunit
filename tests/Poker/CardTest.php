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

    /**
     * @test
     */
    public function isSameSuit()
    {
        $cardA = new Card('Heart', 1);
        $cardB = new Card('Heart', 2);

        $this->assertTrue($cardA->isSameSuit($cardB));
        $this->assertTrue($cardA->isSameSuit($cardA));
        $this->assertTrue($cardB->isSameSuit($cardA));

        $cardC = new Card('Diamond', 1);
        $this->assertFalse($cardA->isSameSuit($cardC));
        $this->assertFalse($cardC->isSameSuit($cardA));
    }
}