<?php
require_once 'vehicle.php';
$vehicle1 = new Vehicle('Honda', 'Civic', 'Red', 4, '23CJ4567');
echo "Make: " . $vehicle1->getMake() . PHP_EOL;
echo "Model: " . $vehicle1->getModel() . PHP_EOL;
echo "Color: " . $vehicle1->getColor() . PHP_EOL;
echo "No of wheels: " . $vehicle1->getNoOfWheels() . PHP_EOL;
echo "Engine No: " . $vehicle1->getEngineNumber() . PHP_EOL;