
<!-- PHP | Day 7 | Classwork -->


<!-- Create a simple Class called Vehicles. This Class should have the properties: name, model, makeYear, color, fuelType.
Use a constructor. Create a method which will return the name and the model of this vehicle.  -->

<?php


    class Vehicles 
    {
        function __construct(public $name, public $model, public $makeYear, public $color, public $fuelType)
        {

        }

        function printInfo()
        {
            return "This is $this->name and its model is $this->model.";
        }
    }

    // Instantiate 3 new objects from this Class. 


    $vans = new Vehicles("Vans", "V-Klasse AVANTGARDE", "2023", "lightgrey", "Petrol 95");
    echo $vans->printInfo().'<br>';

    $limousines = new Vehicles("Limousines", "Mercedes-Maybach S 580", "2023", "black", "Super Plus");
    echo $limousines->printInfo().'<br>';

    $coupes = new Vehicles("Coupés", "CLA Coupé", "2023", "dimgrey", "Hybrid (Super)");
    echo $coupes->printInfo().'<br>';

    // Once you have done creating these objects, create a new Class called Ships. This Class will extend the Vehicles Class. 
    // Add new properties and methods to this Class. 

    class Ships extends Vehicles {

        function __construct($name, $model, $makeYear, $color, $fuelType, public $size, public $tonnage)
        {
            parent::__construct($name, $model, $makeYear, $color, $fuelType);

        }

        function addInfo(){
            return parent::printInfo() . "It is avarage capacity: $this->size, restricted tonnage: $this->tonnage.";
        }

    }

    // Instantiate 3 new objects from this Class.  

    $passenger_ship = new Ships("Passenger ship", "Ocean liner", "2018", "white", "IFO", "1600", "8000");
    echo '<br>' . $passenger_ship->addInfo().'<br>';

    $cruiser = new Ships("Cruiser", "Missile Cruiser", "2015", "black-white", "Gas", "7000", "10000");
    echo $cruiser->addInfo().'<br>';

    $container_ship = new Ships("Container ship", "Panamax", "2019", "brown", "Diesel", "800", "4000");
    echo $container_ship->addInfo().'<br>';

?>







