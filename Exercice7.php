<?php



/* EXERCISE 7

Copy your solution from exercise 6

TODO: Make a static property in the Beverage class that can only be accessed from inside the class called address which has the value "Melkmarkt 9, 2000 Antwerpen".
TODO: Print the address without creating a new instant of the beverage class 2 times in two different ways.

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
    private static $address = "Melkmarkt 9, 2000 Antwerpen";

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

    public static function getAddress(): string
    {
        return self::$address;
    }
}

echo Beverage::getAddress() . "<br>";

$className = 'Beverage';
echo $className::getAddress() . "<br>";