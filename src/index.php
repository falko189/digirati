<?php
/**
 * @author      Daniele Bicelli <d.bicelli89@gmail.com>
 * @authorUrl   http://www.bicelli.me
 */
namespace Digirati;
require_once __DIR__.'/BoardingCard.php';
require_once __DIR__.'/Service.php';

$boardingCards = Service::importCSV(__DIR__.'/../sources/data.csv');

$sortedBoardingCards = Service::sortBoardingCards($boardingCards);

Service::printBoardingCards($sortedBoardingCards);