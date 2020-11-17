<?php

    require_once 'Speedometer.php';

    $convertKm = Speedometer::convertKmToMiles(10);
    var_dump($convertKm);

    $convertMiles = Speedometer::convertMilesToKm(10);
    var_dump($convertMiles);