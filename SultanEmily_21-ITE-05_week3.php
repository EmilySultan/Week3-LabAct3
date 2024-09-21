<?php

// *Vehicle Class (Base Class)*
class Vehicle {
    private $make;
    private $model;
    private $year;

    public function __construct($make, $model, $year) {
        $this->make = $make;
        $this->model = $model;
        $this->year = $year;
    }

    final public function getDetails() {
        return "Make: $this->make, Model: $this->model, Year: $this->year";
    }

    public function describe() {
        return "This is a vehicle";
    }
}

// *Car Class (Derived Class)*
class Car extends Vehicle {
    private $numDoors;

    public function __construct($make, $model, $year, $numDoors) {
        parent::__construct($make, $model, $year);
        $this->numDoors = $numDoors;
    }

    public function describe() {
        return "This is a car with $this->numDoors doors";
    }
}

// *Motorcycle Class (Derived Class)*
final class Motorcycle extends Vehicle {
    public function describe() {
        return "This is a motorcycle";
    }
}

// *Electric Vehicle Interface*
interface ElectricVehicle {
    public function chargeBattery();
}

// *ElectricCar Class (Derived Class)*
class ElectricCar extends Car implements ElectricVehicle {
    public function chargeBattery() {
        return "Charging battery...";
    }

    public function describe() {
        return "This is an electric car with " . parent::describe();
    }
}

// *Testing the Implementation*
$car = new Car("Toyota", "Corolla", 2022, 4);
echo $car->getDetails() . "<br>";
echo $car->describe() . "<br>";

$motorcycle = new Motorcycle("Honda", "CBR500R", 2020);
echo $motorcycle->getDetails() . "<br>";
echo $motorcycle->describe() . "<br>";

$electricCar = new ElectricCar("Tesla", "Model 3", 2022, 4);
echo $electricCar->getDetails() . "<br>";
echo $electricCar->describe() . "<br>";
echo $electricCar->chargeBattery() . "<br>";

?>