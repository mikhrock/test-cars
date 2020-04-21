<?php

namespace App\TestTask\CarBundle\Builder;


interface AbstractCarBuilder
{
    public function produceEngine($engine): void;

    public function produceBody($body): void;

    public function produceTransmission($transmission): void;

    public function produceInterior($interior): void;

    public function produceColor($color): void;

    public function produceOptions($options): void;
}