<?php

/*
|--------------------------------------------------------------------------
| Asset Model Factories
|--------------------------------------------------------------------------
|
| Factories related exclusively to creating models ..
|
*/

$factory->define(App\Models\License::class, function (Faker\Generator $faker) {


    
    return [
        'user_id' => 1,
        'location_id' => rand(1,5),
        'serial' => $faker->uuid,
        'notes'   => 'Created by DB seeder',
        'purchase_date' => $faker->dateTimeBetween('-1 years','now', date_default_timezone_get()),
        'order_number' => $faker->numberBetween(1000000, 50000000),
    ];

    
});

// 1
$factory->state(App\Models\License::class, 'photoshop', function ($faker) {
    $data =  [
        'name' => 'Photoshop',
        'manufacturer_id' => 9,
        'seats' => 10,
    ];

    for ($x = 0; $x < $data['seats']; $x++) {
        $seat = new App\Models\LicenseSeat;
        $seat->license_id = 1;
        $seat->save();
    }
    
    return $data;

});

// 2
$factory->state(App\Models\License::class, 'acrobat', function ($faker) {

    $data =  [
        'name' => 'Acrobat',
        'manufacturer_id' => 9,
        'seats' => 10,
    ];

    for ($x = 0; $x < $data['seats']; $x++) {
        $seat = new App\Models\LicenseSeat;
        $seat->license_id = 1;
        $seat->save();
    }

    return $data;
});

// 3
$factory->state(App\Models\License::class, 'indesign', function ($faker) {
    $data =  [
        'name' => 'InDesign',
        'manufacturer_id' => 9,
        'seats' => 10,
    ];

    for ($x = 0; $x < $data['seats']; $x++) {
        $seat = new App\Models\LicenseSeat;
        $seat->license_id = 1;
        $seat->save();
    }

    return $data;
});


// 4
$factory->state(App\Models\License::class, 'office', function ($faker) {
    $data =  [
        'name' => 'Office',
        'manufacturer_id' => 2,
        'seats' => 20,
    ];

    for ($x = 0; $x < $data['seats']; $x++) {
        $seat = new App\Models\LicenseSeat;
        $seat->license_id = 1;
        $seat->save();
    }

    return $data;
});


