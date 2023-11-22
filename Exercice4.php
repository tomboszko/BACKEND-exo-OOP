
<?php
//declare(strict_types=1);

//Exercice4
// Define the Beverage class
class Beverage 
{
    // Declare the properties
    protected $name;
    protected $color;
    protected $price;
    protected $temperature;

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
    protected $alcoholPercentage;

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



//TODO: Make all properties protected.


//TODO: Make all the other prints work without error without changing the beverage class.
//TODO: Don't call getters in de child class.



