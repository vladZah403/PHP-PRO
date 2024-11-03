<?php

namespace Taxi;

class EconomyCar implements Car {
    public function getModel(): string {
        return "Economy Model - Hyundai i10";
    }

    public function getPrice(): float {
        return 50.0;
    }
}
