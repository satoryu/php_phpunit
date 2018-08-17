<?php
namespace Poker;

use PHPUnit\Framework\TestCase;
use Poker\Poker;

class PokerTest extends TestCase
{
    private $porker;

    public function setUp()
    {
        $this->poker = new Poker();
    }
}