<?php
/**
 * @author      Daniele Bicelli <d.bicelli89@gmail.com>
 * @authorUrl   http://www.bicelli.me
 */

namespace digiratiTest;
use PHPUnit\Framework\TestCase;
require_once __DIR__.'/../src/BoardingCard.php';
use Digirati\BoardingCard;
/**
 * BoardingCard  class
 *
 */
class BoardingCardTest extends TestCase
{
    public function testOutputIsCorrect()
    {
        $a = new BoardingCard("Heathrow", "Newcastle", "Flight", "NLW55", "24A");
        $this->expectOutputString("Flight NLW55 From Heathrow to Newcastle, Seat number 24A");
        print $a->getOutput();
    }
}

