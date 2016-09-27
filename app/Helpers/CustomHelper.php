<?php

use KamranAhmed\Geocode\Geocode;

if(! function_exists("latLongGenerate")){
    function latLongGenerate($address){

        $geoCode = new Geocode(env('GOOGLE_MAPS_KEY'));

        $location = $geoCode->get($address);

        if(empty($location->getLatitude()) || empty($location->getLongitude())){
            return false;
        }

        return array("latitude" => $location->getLatitude(), "longitude" => $location->getLongitude());
    }
}