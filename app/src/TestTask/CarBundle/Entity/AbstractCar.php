<?php

namespace App\TestTask\CarBundle\Entity;

abstract class AbstractCar
{
    protected $engine;

    protected $body;

    protected $transmission;

    protected $interior;

    protected $color;

    protected $options;

    abstract public function getCarData();
}