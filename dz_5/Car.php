<?php

namespace Taxi;

interface Car {
    public function getModel(): string;
    public function getPrice(): float;
}
