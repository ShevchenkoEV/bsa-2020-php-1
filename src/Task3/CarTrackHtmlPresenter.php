<?php

declare(strict_types=1);

namespace App\Task3;

use App\Task1\Track;

class CarTrackHtmlPresenter
{
    public function present(Track $track): string
    {
        //@todo

        $content = "";
        $cars = $track->all();

        foreach ($cars as $car) {
            $content .= "<div><p>" . '<img src = "' . $car->getImage() . '" alt = "car">'. " " .$car->getId() .
                ":".  $car->getName() . " " . $car->getSpeed() ." ".  $car->getFuelTankVolume() . " " . $car->getFuelConsumption() . "</p></div>" . PHP_EOL;
        }
        return $content;

    }
}