<?php

// class (prototype(car name) -> object,object)

class Car
{
    // variable -> class -> property
    private static $brand = 'suzuki';
    private $wheels = 4; //10
    private $name; // 'lambo'
    protected $hello = 'world';

    public function __construct($name)
    {
        $this->name = $name;
    }

    // function -> class -> method
    public function drive()
    {
        echo $this->name . ' is driving';
    }

    public static function getBrand()
    {
        echo 'Brand is ' . static::$brand;
    }

    //getter (private property -> access)
    protected function getWheels()
    {
        return $this->wheels; //$this = new Car
    }

    //setter (private property -> changes)
    public function setWheels($value)
    {
        if ($value % 2 !== 0) {
            return 'car wheels should not have odd numbers';
            // never hit
        }
        $this->wheels = $value;
    }
}
// echo Car::getBrand();
// $car1 = new Car('lambo'); //object
// $car1->getBrand();
// $car1->wheels = 5; //unexpected changes

// echo $car1->wheels;
// $car1->drive();


// $car1->wheels = 'something wrong';
// echo $car1->setWheels(5);
// echo $car1->getWheels(); //4


class Truck extends Car
{
    public function getHelloData()
    {
        return $this->hello;
    }

    public function getTruckWheels()
    {
        $this->setWheels(10);
        return $this->getWheels();
    }
}

$truck = new Truck('truck name');
echo $truck->getTruckWheels();// 10
