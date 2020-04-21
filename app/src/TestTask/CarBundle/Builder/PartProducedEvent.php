<?php

class PartProducedEvent extends \Symfony\Contracts\EventDispatcher\Event
{
    const NAME = 'part.produced';

    protected $carPart;

    public function __construct($carPart)
    {
        $this->carPart = $carPart;
    }

    public function getCarPart()
    {
        return $this->carPart;
    }
}