<?php

namespace Poker;

class OnePair
{
    private $cards = array();

    public function __construct($cards)
    {
        $this->cards = $cards;
    }

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