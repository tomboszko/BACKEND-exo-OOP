<?php

declare(strict_types=1);

/* EXERCISE 6

Copy the classes of exercise 2.

TODO: Change the properties to private.
TODO: Make a const barname with the value 'Het Vervolg'.
TODO: Print the constant on the screen.
TODO: Create a function in beverage and use the constant.
TODO: Do the same in the beer class.
TODO: Print the output of these functions on the screen.
TODO: Make sure that every print is on a new line.

Use typehinting everywhere!
*/


declare(strict_types=1);

// Define the Beverage class
class Beverage 
{
    private $name;
    private $color;
    private $price;
    private $temperature;
    const BARNAME = 'Het Vervolg';

    public function __construct(string $name, string $color, float $price, string $temperature = "cold")
    {
        $this->name = $name;
        $this->color = $color;
        $this->price = $price;
        $this->temperature = $temperature;
    }

    public function useConstant(): string
    {
        return "This beverage is served at " . self::BARNAME;
    }
}

class Beer extends Beverage
{
    private $alcoholPercentage;

    public function __construct(string $name, string $color, float $price, float $alcoholPercentage, string $temperature = "cold")
    {
        parent::__construct($name, $color, $price, $temperature);
        $this->alcoholPercentage = $alcoholPercentage;
    }

    public function useConstant(): string
    {
        return "This beer is served at " . parent::BARNAME;
    }
}

$cola = new Beverage("Cola", "black", 2);
$duvel = new Beer("Duvel", "blond", 3.5, 8.5);

echo Beverage::BARNAME . "<br>";
echo $cola->useConstant() . "<br>";
echo $duvel->useConstant() . "<br>";
