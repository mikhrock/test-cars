<?php
namespace App\Controller;

use App\TestTask\CarBundle\CarBundle;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\HttpFoundation\Response;

class CarController extends AbstractController
{
    public function createCar()
    {
        $carBundle = new CarBundle();
        $carConfig = $this->getParameter('car_config');

        $car = $carBundle->createCar($carConfig);

        $carData = $car->getCarData();

        return new Response(
            '<html><body>'.print_r($carData).'</body></html>'
        );
    }
}