<?php

declare(strict_types=1);

namespace App\Task1;

class Track
{
    private float $lapLength;
    private int $lapsNumber;
    public ?array $cars = null;
    public Car $win;


    public function __construct(float $lapLength, int $lapsNumber)
    {
        //@todo
        $this->lapLength = $lapLength;
        $this->lapsNumber = $lapsNumber;
    }

    public function getLapLength(): float
    {
        // @todo
        return $this->lapLength;
    }

    public function getLapsNumber(): int
    {
        // @todo
        return $this->lapsNumber;
    }

    public function add(Car $car): void
    {
        // @todo

        if (is_null($this->cars)) {
            $this->cars[] = $car;
        } else {
            $is = 0;
            foreach ($this->cars as $value) {
                if ($value->getId() == $car->getId()) {
                    $is++;
                }
            }
            if ($is == 0) {
                $this->cars[] = $car;
            }
        }
    }


    public
    function all(): array
    {
        // @todo
        return $this->cars;
    }

    public
    function run(): Car
    {
        // @todo
        echo "<------------RUN----------->" . PHP_EOL;
        $cW = 10000000;
        foreach ($this->cars as $carTrack) {
            echo "сейчас авто: " . $carTrack->getName() . PHP_EOL;
            echo "длина круга: " . $this->lapLength . ", кол-во кругов: " . $this->lapsNumber . ", скорость авто: " . $carTrack->getSpeed() . PHP_EOL;
            $carIdealRace = intval((($this->lapLength * $this->lapsNumber) / $carTrack->getSpeed()) * 3600);
            $mustFuel = intval(($this->lapLength * $this->lapsNumber) / ($carTrack->getFuelTankVolume() / ($carTrack->getFuelConsumption() / 100)));
            echo "нужна заправка: " . $mustFuel . " раз" . PHP_EOL;
            if ($mustFuel == 0) {
                echo "Запрвка не нужна, общее время гонки: " . $carIdealRace . " секунд" . PHP_EOL;
                $carTrack->setTimeRace($carIdealRace);
            } else {
                $carTrack->setTimeRace($carIdealRace + ($mustFuel * ($carTrack->getPitStopTime())));
                echo "Общее время гонки с заправкой : " . $carTrack->getTimeRace() . PHP_EOL;
            }
            echo "-----------------------------------------------" . PHP_EOL;

//            if ($carTrack->getTimeRace() == $cW) {
//                echo "Победителей НЕТ (НИЧЬЯ)" . PHP_EOL;
//            }
            if ($carTrack->getTimeRace() < $cW) {
                $cW = $carTrack->getTimeRace();
                $this->win = $carTrack;
            }
        }
        return $this->win;
    }
}