<?php

namespace Taxi;

class LuxuryCar implements Car {
    public function getModel(): string {
        return "Luxury Model - Mercedes S-Class";
    }

    public function getPrice(): float {
        return 200.0; // Ціна для класу люкс
    }
}
