<?php

namespace App\TestTask\CarBundle\Entity;

class Car extends AbstractCar
{
    public function setEngine($engine)
    {
        $this->engine = $engine;
    }

    public function setBody($body)
    {
        $this->body = $body;
    }

    public function setTransmission($transmission)
    {
        $this->transmission = $transmission;
    }

    public function setInterior($interior)
    {
        $this->interior = $interior;
    }

    public function setColor($color)
    {
        $this->color = $color;
    }

    public function setOptions($options)
    {
        $this->options = $options;
    }

    public function getCarData() {
        $carData = [
            'Engine' => $this->engine,
            'Body' => $this->body,
            'Transmission' => $this->transmission,
            'Interior' => $this->interior,
            'Color' => $this->color,
            'Options' => $this->options,
        ];

        return $carData;
    }
}