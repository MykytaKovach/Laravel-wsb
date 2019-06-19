<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\Trip::class, function (Faker $faker) {
    return [
        'to' =>'{"code":"LWO","country_name":"Ukraine","name":"Lviv"}',
        'from'=>'{"code":"LWO","country_name":"Ukraine","name":"Lviv"}',
        'dateStart'=>'Sun Jun 23 2019 00:00:00 GMT+0200 (Central European Summer Time)',
        'dateEnd'=>'Sun Jun 23 2019 00:00:00 GMT+0200 (Central European Summer Time)',
        'selectedFlight' =>'{"type":"flight-offer","id":"1560084401479-1058571436","offerItems":[{"services":[{"segments":[{"flightSegment":{"departure":{"iataCode":"POZ","at":"2019-10-01T11:00:00+02:00"},"arrival":{"iataCode":"FRA","terminal":"1","at":"2019-10-01T12:20:00+02:00"},"carrierCode":"LH","number":"1389","aircraft":{"code":"CR9"},"operating":{"carrierCode":"CL","number":"1389"},"duration":"0DT1H20M"},"pricingDetailPerAdult":{"travelClass":"ECONOMY","fareClass":"V","availability":9,"fareBasis":"V06LGTE9"}},{"flightSegment":{"departure":{"iataCode":"FRA","terminal":"1","at":"2019-10-01T14:15:00+02:00"},"arrival":{"iataCode":"MUC","terminal":"2","at":"2019-10-01T15:10:00+02:00"},"carrierCode":"LH","number":"108","aircraft":{"code":"321"},"operating":{"carrierCode":"LH","number":"108"},"duration":"0DT0H55M"},"pricingDetailPerAdult":{"travelClass":"ECONOMY","fareClass":"V","availability":9,"fareBasis":"V06LGTE9"}},{"flightSegment":{"departure":{"iataCode":"MUC","terminal":"2","at":"2019-10-01T19:05:00+02:00"},"arrival":{"iataCode":"MAD","terminal":"2","at":"2019-10-01T21:45:00+02:00"},"carrierCode":"LH","number":"1806","aircraft":{"code":"321"},"operating":{"carrierCode":"LH","number":"1806"},"duration":"0DT2H40M"},"pricingDetailPerAdult":{"travelClass":"ECONOMY","fareClass":"V","availability":9,"fareBasis":"V06LGTE9"}}]}],"price":{"total":"392.88","totalTaxes":"155.88"},"pricePerAdult":{"total":"392.88","totalTaxes":"155.88"}}]}',
        'selectedReturnFlight'=>'{"type":"flight-offer","id":"1560084401479-1058571436","offerItems":[{"services":[{"segments":[{"flightSegment":{"departure":{"iataCode":"POZ","at":"2019-10-01T11:00:00+02:00"},"arrival":{"iataCode":"FRA","terminal":"1","at":"2019-10-01T12:20:00+02:00"},"carrierCode":"LH","number":"1389","aircraft":{"code":"CR9"},"operating":{"carrierCode":"CL","number":"1389"},"duration":"0DT1H20M"},"pricingDetailPerAdult":{"travelClass":"ECONOMY","fareClass":"V","availability":9,"fareBasis":"V06LGTE9"}},{"flightSegment":{"departure":{"iataCode":"FRA","terminal":"1","at":"2019-10-01T14:15:00+02:00"},"arrival":{"iataCode":"MUC","terminal":"2","at":"2019-10-01T15:10:00+02:00"},"carrierCode":"LH","number":"108","aircraft":{"code":"321"},"operating":{"carrierCode":"LH","number":"108"},"duration":"0DT0H55M"},"pricingDetailPerAdult":{"travelClass":"ECONOMY","fareClass":"V","availability":9,"fareBasis":"V06LGTE9"}},{"flightSegment":{"departure":{"iataCode":"MUC","terminal":"2","at":"2019-10-01T19:05:00+02:00"},"arrival":{"iataCode":"MAD","terminal":"2","at":"2019-10-01T21:45:00+02:00"},"carrierCode":"LH","number":"1806","aircraft":{"code":"321"},"operating":{"carrierCode":"LH","number":"1806"},"duration":"0DT2H40M"},"pricingDetailPerAdult":{"travelClass":"ECONOMY","fareClass":"V","availability":9,"fareBasis":"V06LGTE9"}}]}],"price":{"total":"392.88","totalTaxes":"155.88"},"pricePerAdult":{"total":"392.88","totalTaxes":"155.88"}}]}',
        'status'=>'undefined',
        'createdBy'=>$faker->name
    ];
});
