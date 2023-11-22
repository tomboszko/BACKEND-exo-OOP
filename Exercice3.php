<?php

declare(strict_types=1);

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

<?php

declare(strict_types=1);

/* EXERCISE 2

TODO: Make class beer that extends from Beverage.
TODO: Create the properties name (string) and alcoholPercentage (float).
TODO: Foresee a construct that's allows us to use all the properties from beverage and that sets the values for name and alcoholpercentage.

Remember for now we will use properties and methods that can be accessed from everywhere.
TODO: Make a getAlcoholPercentage function which returns the alocoholPercentage.
TODO: Instantiate an object which represents Duvel. Make sure that the color is set to blond, the price equals 3.5 euro and the temperature to cold automatically.
TODO: Also the name equal to Duvel and the alcohol percentage to 8,5%
TODO: Print the getAlcoholPercentage 2 times on the screen in two different ways, print the color on the screen and the getInfo.

Make sure that each print is on a different line.
Try to get this error on the screen= Fatal error: Uncaught Error: Call to undefined method Beverage::getAlcoholPercentage() in /var/www/becode/workshop/exercise2.php on line 64
USE TYPEHINTING EVERYWHERE!
*/

// Define the Beverage class
class Beverage 
{
    // Declare the properties
    public $name;
    public $color;
    public $price;
    public $temperature;

    // Define the constructor
    public function __construct(string $name, string $color, float $price, string $temperature = "cold")
    {
        // Assign the constructor arguments to the properties
        $this->name = $name;
        $this->color = $color;
        $this->price = $price;
        $this->temperature = $temperature;
    }

    // Define a method to get the beverage info
    public function getInfo()
    {
        // Print the beverage info
        echo $this->name . " beverage is " . $this->color . " and " . $this->temperature;
    }
}

// Create a new Beverage instance
$cola = new Beverage("Cola", "black", 2);
$fanta = new Beverage("Fanta", "orange", 2);

// Print the info of each beverage
//echo $cola->getInfo() . "<br>";
//echo $fanta->getInfo() .;

// Define the Beer class that extends the Beverage class
class Beer extends Beverage
{
    // Declare an additional property
    public $alcoholPercentage;

    // Define the constructor
    public function __construct(string $name, string $color, float $price, string $temperature = "cold", float $alcoholPercentage)
    {
        // Call the parent constructor
        parent::__construct($name, $color, $price, $temperature);
        // Assign the additional argument to the additional property
        $this->alcoholPercentage = $alcoholPercentage;
    }

    public function getAlcoholPercentage()
    {
        // Print the alcohol percentage info
        echo $this->name . " beverage is " . $this->alcoholPercentage . "% of alcohol";
    }

}
//TODO: Instantiate an object which represents Duvel. Make sure that the color is set to blond, the price equals 3.5 euro and the temperature to cold automatically.
//TODO: Also the name equal to Duvel and the alcohol percentage to 8,5%
//TODO: Print the getAlcoholPercentage 2 times on the screen in two different ways, print the color on the screen and the getInfo.
$Duvel = new Beer("Duvel","blond", 3.50, "cold", 8.5);

echo $Duvel -> getInfo() . "<br>";
echo $Duvel -> getAlcoholPercentage() ."<br>";
print_r($Duvel);
