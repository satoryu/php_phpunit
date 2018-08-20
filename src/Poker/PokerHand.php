<?php

namespace Poker;

abstract class PokerHand
{
    protected $cards;

    public function __construct($cards)
    {
        $this->cards = $cards;
    }

    abstract public function match();
}