<?php

namespace Poker;

class Poker
{

    public function isOnePair($cards)
    {
        $pairs = array();

        foreach ($cards as $card) {
            $number = $card[1];
            if (isset($pairs[$number])) {
                return true;
            } else {
                $pairs[$number] = 1;
            }
        }

        return false;
    }

    public function isTwoPair($cards)
    {
        return true;
    }
}