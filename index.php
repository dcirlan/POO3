<?php

require_once 'Skateboard.php';
require_once 'Car.php';
require_once 'Bicycle.php';
require_once 'Truck.php';
require_once 'MotorWay.php';
require_once 'PedestrianWay.php';
require_once 'ResidentialWay.php';

$motorWay = new MotorWay();
$motorWay->setNbLane(4);
$motorWay->setMaxSpeed(130);
$motorWay->addVehicle(new Car('yellow', '4', 'fuel'));
$motorWay->addVehicle(new Bicycle('blue', 1));
var_dump($motorWay);

$pedestrianWay = new PedestrianWay();
$pedestrianWay->setNbLane(1);
$pedestrianWay->setMaxSpeed(10);
var_dump($pedestrianWay);

$residentialWay = new ResidentialWay();
$residentialWay->setNbLane(2);
$residentialWay->setMaxSpeed(50);
var_dump($residentialWay);


































/*$car1 = new Car('yellow', '4', 'fuel');

$car = new Car('green', 4, 'electric');
echo $car->forward();
var_dump($car);

var_dump(Car::ALLOWED_ENERGIES);

$bicycle = new Bicycle('blue', 1);
echo $bicycle->forward();
var_dump($bicycle);

$truck = new Truck('red', 2, 'fuel', 100);
echo $truck->forward();
echo $truck->setActualStorage(50);
echo $truck->getActualStorage();
var_dump($truck);*/

