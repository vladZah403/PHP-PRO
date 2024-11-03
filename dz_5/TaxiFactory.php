<?php

namespace Taxi;

class TaxiFactory {
    public static function createTaxi(string $type): Car {
        switch (strtolower($type)) {
            case 'economy':
                return new EconomyCar();
            case 'standard':
                return new StandardCar();
            case 'luxury':
                return new LuxuryCar();
            default:
                throw new \Exception("Невідомий тип таксі: $type");
        }
    }
}
