<?php

namespace Poker;

abstract class Hand
{
    protected $cards;

    public function __construct($cards)
    {
        $this->cards = $cards;
    }

    abstract public function match();
}