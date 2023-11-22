<?php



/* EXERCISE 5

Copy the class of exercise 1. done

TODO: Change the properties to private. done
TODO: Fix the errors without using getter and setter functions. done
TODO: Change the price to 3.5 euro and print it also on the screen on a new line.
*/
declare(strict_types=1);
class Beverage 
{
    // The Properties
    private $name;
    private $color;
    private $price;
    private $temperature;

    // The Constructor with incoming parameters in the brackets
    public function __construct(string $name, string $color, float $price, string $temperature = "cold")
    {
        $this->name = $name;
        $this->color = $color;
        $this->price = $price;
        $this->temperature = $temperature;
    }

    // Setter for price
    public function setPrice(float $price): void
    {
        $this->price = $price;
    }

    // Getter for price
    public function getPrice(): float
    {
        return $this->price;
    }

    // The Methods
    public function getInfo(): string
    {
        return $this->name . " beverage is " . $this->color . " and " . $this->temperature;
    }
}

// Create a new Beverage instance
$cola = new Beverage("Cola", "black", 2);
$fanta = new Beverage("Fanta", "orange", 2);

// Change the price of cola
$cola->setPrice(3.5);

echo $cola->getInfo() . "<br>";
echo $fanta->getInfo() . "<br>";
echo $cola->getPrice() . " €";

 