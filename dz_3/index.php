<?php

class Color {
    private $red;
    private $green;
    private $blue;


    public function __construct($red, $green, $blue) {
        $this->setRed($red);
        $this->setGreen($green);
        $this->setBlue($blue);
    }


    public function getRed() {
        return $this->red;
    }

    public function getGreen() {
        return $this->green;
    }

    public function getBlue() {
        return $this->blue;
    }

   
    public function setRed($red) {
        if ($red < 0 || $red > 255) {
            throw new Exception("Недопустимое значение для red: $red");
        }
        $this->red = $red;
    }

    public function setGreen($green) {
        if ($green < 0 || $green > 255) {
            throw new Exception("Недопустимое значение для green: $green");
        }
        $this->green = $green;
    }

    public function setBlue($blue) {
        if ($blue < 0 || $blue > 255) {
            throw new Exception("Недопустимое значение для blue: $blue");
        }
        $this->blue = $blue;
    }

    // Метод equals для сравнения объектов
    public function equals($otherColor) {
        return $this->red === $otherColor->getRed() &&
            $this->green === $otherColor->getGreen() &&
            $this->blue === $otherColor->getBlue();
    }

    // Статический метод random для случайного цвета
    public static function random() {
        return new Color(rand(0, 255), rand(0, 255), rand(0, 255));
    }

    // Метод mix для смешивания цветов
    public function mix($otherColor) {
        $mixedRed = (int)(($this->red + $otherColor->getRed()) / 2);
        $mixedGreen = (int)(($this->green + $otherColor->getGreen()) / 2);
        $mixedBlue = (int)(($this->blue + $otherColor->getBlue()) / 2);
        return new Color($mixedRed, $mixedGreen, $mixedBlue);
    }
}

$color1 = new Color(250, 250, 250);
$color2 = new Color(100, 100, 100);
$mixedColor = $color1->mix($color2);

echo $mixedColor->getRed();
echo $mixedColor->getGreen();
echo $mixedColor->getBlue();
