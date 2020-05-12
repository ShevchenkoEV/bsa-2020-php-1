<?php

require __DIR__ . '/../../vendor/autoload.php';

use App\Task1\Track;
use App\Task1\AvailabilityCar;
use App\Task1\Car;


echo "Старт гонки!".PHP_EOL."Введите длину круга(км): ".PHP_EOL;
$lapLength = readline();
echo "Введите кол-во кругов: ".PHP_EOL;
$lapsNumber = readline();

$track = new Track($lapLength,$lapsNumber);
$existenceCar = new AvailabilityCar();

do {
    echo PHP_EOL . "Введите команду, можно только: add, all, run, exit.: ";
    $commands = readline();

    switch ($commands) {
        case "add" :
            $track->add($existenceCar->selectCar());
            break;
        case "all" :
            $cars = $track->all();
            foreach ($cars as $value){
                echo "Авто на треке: -> ".$value->getId()." --> ". $value->getName().PHP_EOL;
            }
            echo "Всего : ".count($cars);
            break;
        case "run" :
            $carWin = $track->run();
            echo " Победитель : ".$carWin->getName().PHP_EOL;
            $commands = "exit";
            break;
        default :
            if ($commands == "exit"){
                echo "программа завершена".PHP_EOL;
            }else{
                echo "Неверная команда, можно только: add, all, run, exit.";
            }
    }
} while ($commands != "exit");

