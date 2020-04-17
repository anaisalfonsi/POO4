<?php
require 'Class/Autoloader.php';
Autoloader::register();


$car1 = new Car('car', 'red', 5, 36,'premium gas');
$car1Name = "Car 1";
$car1->setName($car1Name);

$car1->setHasParkBrake(false);
$car2 = new Car('car', 'blue', 2, 110, 'regular gas');

echo $car1Name .'<br>' .'<br>';
echo $car1->start() .'<br>' .'<br>';
echo "Carspeed: " .$car1->getCurrentSpeed() ." miles/hr" .'<br>' .'<br>';


$bicycle1 = new Bicycle('bike', 'blue', 1, 10);
$bicycle1Name = "Bike 1";
$bicycle1->setName($bicycle1Name);

echo $bicycle1Name .'<br>' .'<br>';
echo $bicycle1->getColor() .'<br>' .'<br>';
echo $bicycle1->forward() .'<br>' .'<br>';
echo "Bikespeed: " .$bicycle1->getCurrentSpeed() ." miles/hr" .'<br>' .'<br>';


echo "<img src='https://media.giphy.com/media/ZsZmffS4YS5yw/giphy.gif'/>" .'<br>' .'<br>';

$truck1 = new Truck('truck', 'ivory', 3, 90, 'regular gas', 1000);
$truck1Name = "Truck 1";
$truck1->setName($truck1Name);

echo $truck1Name .'<br>' .'<br>';
echo $truck1->getColor() .'<br>' .'<br>';
$truck1->setLoadState(1500);
echo $truck1->store() .'<br>' .'<br>';
echo $truck1->start() .'<br>' .'<br>';
echo $truck1->brake() .'<br>' .'<br>';