<?php

namespace Poker;

use Poker\Hand;

class OnePair extends Hand
{
    public function match()
    {
        $pairs = array();

        foreach ($this->cards as $card) {
            $number = $card[1];
            if (isset($pairs[$number])) {
                return true;
            } else {
                $pairs[$number] = 1;
            }
        }

        return false;
    }
}