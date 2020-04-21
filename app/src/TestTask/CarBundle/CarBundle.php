<?php

namespace App\TestTask\CarBundle;

use App\TestTask\CarBundle\Builder\CarBuilder;
use App\TestTask\CarBundle\Entity\Car;
use Symfony\Component\HttpKernel\Bundle\Bundle;

class CarBundle extends Bundle
{
    public function createCar(array $carConfig): Car
    {
        $car = new CarBuilder();
        $car->produceEngine($carConfig['engine']);
        $car->produceBody($carConfig['body']);
        $car->produceTransmission($carConfig['transmission']);
        $car->produceInterior($carConfig['interior']);
        $car->produceColor($carConfig['color']);
        $car->produceOptions($carConfig['options']);
        $car = $car->getCar();

        return $car;
    }
}