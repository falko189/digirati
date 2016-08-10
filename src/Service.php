<?php

/**
 * @author      Daniele Bicelli <d.bicelli89@gmail.com>
 * @authorUrl   http://www.bicelli.me
 */

namespace Digirati;

require_once __DIR__ . '/BoardingCard.php';

/**
 * Service  class
 *
 */
class Service {
    /*
     * Import boarding cards from a CSV and create an array of objects
     * 
     * @param string $fileName
     * @return array $boardingCards
     */

    static public function importCSV($fileName) {
        $row = 1;
        $boardingCards = [];
        if (($handle = fopen($fileName, "r")) !== FALSE) {
            while (($data = fgetcsv($handle, 1000, ";")) !== FALSE) {
//        Origin;Destination;Transport Method;Name;Seat Allocation
                $boardingCards[] = new BoardingCard($data[0], $data[1], $data[2], $data[3], $data[4]);
                $row++;
            }
            fclose($handle);
        }
        return $boardingCards;
    }

    /*
     * Order the array of boarding cards and return it
     * 
     * @param string $boardingCards
     * @return array $boardingCards
     */

    static public function sortBoardingCards($boardingCards) {

        $callback = function ($a, $b) {
            $order = array("Digirati Office London", "Heathrow Airport", "Newcastle Airport", "Edinburgh Waverly");
            $posA = array_search($a->getOrigin(), $order);
            $posB = array_search($b->getOrigin(), $order);
            return ($posA < $posB) ? -1 : 1;
        };
        usort($boardingCards, $callback);

        return $boardingCards;
    }

    /*
     * Print all the boarding cards
     * @param array $boardingCards
     */

    static public function printBoardingCards($boardingCards) {

        foreach ($boardingCards as $key => $boardingCard) {
            echo ($key + 1) . ". " . $boardingCard->getOutput() . "\n";
        }
        echo "5. You have arrived at your destination\n";
    }

}
