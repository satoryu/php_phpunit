<?php

namespace Poker;

use Poker\OnePair;
use Poker\TwoPair;

class Poker
{

    public function isOnePair($cards)
    {
        $hand = new OnePair($cards);

        return $hand->match();
    }

    public function isTwoPair($cards)
    {
        $hand = new TwoPair($cards);

        return $hand->match();
    }
}