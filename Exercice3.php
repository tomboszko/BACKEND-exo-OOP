<?php
//Exercice3
declare(strict_types=1);

// Define the Beverage class
class Beverage 
{
    // Declare the properties
    private $name;
    private $color;
    private $price;
    private $temperature;

    // Define the constructor
    public function __construct(string $name, string $color, float $price, string $temperature = "cold")
    {
        $this->name = $name;
        $this->color = $color;
        $this->price = $price;
        $this->temperature = $temperature;
    }

   

    // Getter methods
    public function getName(): string
    {
        return $this->name;
    }

    public function getColor(): string
    {
        return $this->color;
    }

    public function getPrice(): float
    {
        return $this->price;
    }

    public function getTemperature(): string
    {
        return $this->temperature;
    }
    //setter method to change cololor
    public function setColor(string $color): void
    {
        $this->color = $color;
    }

    // Define a method to get the beverage info
    public function getInfo(): string
    {
        return $this->getName() . " beverage is " . $this->getColor() . " and " . $this->getTemperature();
    }
}

// Define the Beer class that extends the Beverage class
class Beer extends Beverage
{
    // Declare an additional property
    private $alcoholPercentage;

    // Define the constructor
    public function __construct(string $name, string $color, float $price, float $alcoholPercentage, string $temperature = "cold")
    {
        parent::__construct($name, $color, $price, $temperature);
        $this->alcoholPercentage = $alcoholPercentage;
    }

    // Getter method for alcoholPercentage
    public function getAlcoholPercentage(): float
    {
        return $this->alcoholPercentage;
    }

    public function getBeerInfo(): string
    {
        return $this->getName() . " beverage has " . $this->getAlcoholPercentage() . "% of alcohol";
    }
    public function beerInfo(): string
    {
        return "Hi i'm " . $this->getName() . " and have an alcohol percentage of " . $this->getAlcoholPercentage() . " and I have a " . $this->getColor() . " color.";
    }
}

$Duvel = new Beer("Duvel","blond", 3.50, 8.5, "cold");

echo $Duvel->getInfo() . "<br>";
echo $Duvel->getBeerInfo() . "<br>";

$Duvel->setColor("light");

// Print the new color of Duvel
echo "The new color of Duvel is: " . $Duvel->getColor() . "<br>";
echo $Duvel ->beerInfo();



/* EXERCISE 3

TODO: Copy the code of exercise 2 to here and delete everything related to cola.
TODO: Make all properties private.
TODO: Make all the other prints work without error.
TODO: After fixing the errors. Change the color of Duvel to light instead of blond and also print this new color on the screen after all the other things that were already printed (to be sure that the color has changed).
TODO: Create a new private method in the Beer class called beerInfo which returns "Hi i'm Duvel and have an alcochol percentage of 8.5 and I have a light color."

Make sure that you use the variables and not just this text line.

TODO: Print this method on the screen on a new line.

USE TYPEHINTING EVERYWHERE!
*/
