<?php

declare(strict_types=1);

namespace App\Task1;

class Car
{
    private int $id;
    private string $image;
    private string $name;
    private int $speed;
    private int $pitStopTime;
    private float $fuelConsumption;
    private float $fuelTankVolume;
    private float $timeRace;
    private bool $win;

    public function __construct(
        int $id,
        string $image,
        string $name,
        int $speed,
        int $pitStopTime,
        float $fuelConsumption,
        float $fuelTankVolume

    ) {
        //@todo
        $this->id = $id;
        $this->image = $image;
        $this->name = $name;
        $this->speed = $speed;
        $this->pitStopTime = $pitStopTime;
        $this->fuelConsumption = $fuelConsumption;
        $this->fuelTankVolume = $fuelTankVolume;

    }

    public function getId(): int
    {
        // @todo
        return $this->id;
    }

    public function getImage(): string
    {
        // @todo
        return $this->image;
    }

    public function getName(): string
    {
        // @todo
        return $this->name;
    }

    public function getSpeed(): int
    {
        // @todo
        return $this->speed;
    }

    public function getPitStopTime(): int
    {
        // @todo
        return $this->pitStopTime;
    }

    public function getFuelConsumption(): float
    {
        // @todo
        return $this->fuelConsumption;
    }

    public function getFuelTankVolume(): float
    {
        // @todo
        return $this->fuelTankVolume;
    }

    public function setTimeRace(float $time): void
    {
        $this->timeRace = $time;

    }

    public function getTimeRace(): float
    {
        return $this->timeRace;
    }

    public function setWin(bool $win): void
    {
        $this->win = $win;
    }

    public function getWin(): bool
    {
        return $this->win;
    }
}