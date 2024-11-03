<?php

require 'vendor/autoload.php';

use Taxi\TaxiFactory;

try {

    $type = 'luxury';

    $car = TaxiFactory::createTaxi($type);

    echo "Модель машини: " . $car->getModel() . PHP_EOL;
    echo "Ціна поїздки: " . $car->getPrice() . PHP_EOL;

} catch (Exception $e) {
    echo "Помилка: " . $e->getMessage();
}
