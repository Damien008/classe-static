<?php

    class Speedometer
    {

        /*1Km = 0.62 Miles
          1Miles =  1.61Km
        */
        private const kmToMiles = 0.62;
        private const MilesToKm = 1.61;



        public static function convertKmToMiles( $nbKm)
        {
            return $nbKm * self::kmToMiles;
        }

        public static function convertMilesToKm( $nbMiles)
        {
            return $nbMiles * self::MilesToKm;
        }
    }