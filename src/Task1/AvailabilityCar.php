<?php

declare(strict_types=1);

namespace App\Task1;

class AvailabilityCar
{
    // id, image, name, speed, pitStopTime, fuelConsumption, fuelTankVolume
    public array $carNow = [
        [
            1,
            'https://pbs.twimg.com/profile_images/595409436585361408/aFJGRaO6_400x400.jpg',
            'BMW',
            250,
            10,
            5,
            15
        ],
        [
            2,
            'https://i.pinimg.com/originals/e4/15/83/e41583f55444b931f4ba2f0f8bce1970.jpg',
            'Tesla',
            200,
            5,
            5.3,
            18
        ],
        [
            3,
            'https://fordsalomao.com.br/wp-content/uploads/2019/02/1499441577430-1-1024x542-256x256.jpg',
            'Ford',
            220,
            5,
            6.1,
            18.5
        ],
    ];

    public function selectCar(): Car
    {
        echo "Выберите автомобиль(1, 2, 3) :" . PHP_EOL;
        $choiceCar = readline();
        echo "Выбран авто: --> ". $this->carNow[$choiceCar - 1][2].PHP_EOL;
        return new Car(
            $this->carNow[$choiceCar - 1][0],
            $this->carNow[$choiceCar - 1][1],
            $this->carNow[$choiceCar - 1][2],
            $this->carNow[$choiceCar - 1][3],
            $this->carNow[$choiceCar - 1][4],
            $this->carNow[$choiceCar - 1][5],
            $this->carNow[$choiceCar - 1][6],
        );
    }
}