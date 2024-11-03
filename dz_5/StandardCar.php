<?php

namespace Taxi;

class StandardCar implements Car {
    public function getModel(): string {
        return "Standard Model - Toyota Corolla";
    }

    public function getPrice(): float {
        return 100.0;
    }
}
