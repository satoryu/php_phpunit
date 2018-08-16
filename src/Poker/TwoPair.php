<?php

namespace Poker;

use Poker\Hand;

class TwoPair extends Hand
{
    public function match()
    {
        $pairs = array();

        foreach ($this->cards as $card)
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