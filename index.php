<?php
require_once 'Vehicle.php';

require_once 'Bicycle.php';
$bicycle = new Bicycle('blue', 1);
echo $bicycle->forward();
var_dump($bicycle);



require_once 'Car.php';
$car = new Car('green', 4, 'electric');
echo $car->forward();
var_dump($car);
var_dump(Car::ALLOWED_ENERGIES);

require_once 'Truck.php';
$truck = new truck('brown', 3, 'fuel', 30);
$truck->setEnergy('electric');
$truck->setCapacity(120);
$truck->loading();
var_dump($truck);
echo $truck->forward();
echo '<br> Vitesse du véhicule : ' . $truck->getCurrentSpeed(). ' km/h' . '<br>';
echo $truck->brake();
echo '<br> Vitesse du véhicule: ' . $truck->getCurrentSpeed() . ' km/h' . '<br>';
echo $truck->brake() . '<br>';










