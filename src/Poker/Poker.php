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
        $pairs = array();

        foreach ($cards as $card)
        {
            $number = $card[1];
            if (isset($pairs[$number])) {
                $pairs[$number]++;
            } else {
                $pairs[$number] = 1;
            }
        }

        $num_of_pairs = 0;
        foreach ($pairs as $number => $num) {
            if ($num >= 2)
                $num_of_pairs++;
        }

        if ($num_of_pairs >= 2)
            return true;

        return false;
    }
}