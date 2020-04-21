<?php

namespace App\TestTask\CarBundle\Builder;

use App\TestTask\CarBundle\Entity\Car;
use App\TestTask\CarBundle\EventListener\CarBuilderListener;
use Symfony\Component\EventDispatcher\EventDispatcher;


class CarBuilder implements AbstractCarBuilder
{
    private $car;

    private $listener;

    private $eventDispatcher;

    public function __construct()
    {
        $this->reset();
        $this->listener = new CarBuilderListener();
        $this->eventDispatcher = new EventDispatcher();
    }

    public function reset(): void
    {
        $this->car = new Car();
    }

    public function produceEngine($engine): void
    {
        $this->car->setEngine($engine);

        $event = new \PartProducedEvent($engine);
        $this->eventDispatcher
            ->addListener(
                \PartProducedEvent::NAME,
                [$this->listener, 'onProducedAction']);
        $this->eventDispatcher->dispatch($event, \PartProducedEvent::NAME);
    }

    public function produceBody($body): void
    {
        $this->car->setBody($body);
    }

    public function produceTransmission($transmission): void
    {
        $this->car->setTransmission($transmission);
    }

    public function produceInterior($interior): void
    {
        $this->car->setInterior($interior);
    }

    public function produceColor($color): void
    {
        $this->car->setColor($color);
    }

    public function produceOptions($options): void
    {
        $this->car->setOptions($options);
    }

    public function getCar(): Car
    {
        $result = $this->car;
        $this->reset();

        return $result;
    }
}