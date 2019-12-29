<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\Client;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(Client::class, function (Faker $faker) {
    return [
        'companyName' => $faker->company,
        'companyWebsite' => $faker->domainName,
        'companyPhone' => $faker->phoneNumber,
        'companyAddress1' => $faker->streetAddress,
        'companyAddress2' => $faker->secondaryAddress,
        'companyCity' => $faker->city,
        'companyState' => $faker->stateAbbr,
        'companyZip' => $faker->postcode,
        'domainRegistrar' => $faker->domainName,
        'nameServers' => $faker->domainName,
        'webHost' => $faker->domainName,
        'emailProvider' => $faker->domainName,
        'monthlyBilling' => $faker->randomFloat($nbMaxDecimals = 2, $min = 15, $max = 50),
        'billingNotes' => $faker->sentence($nbWords = 12, $variableNbWords = true),
        'ownerFirst' => $faker->firstNameFemale,
        'ownerLast' => $faker->lastName,
        'ownerEmail' => $faker->safeEmail,
        'ownerPhone' => $faker->phoneNumber,
        'secondFirst' => $faker->firstNameFemale,
        'secondLast' => $faker->lastName,
        'secondEmail' => $faker->safeEmail,
        'secondPhone' => $faker->phoneNumber,
        'thirdFirst' => $faker->firstNameMale,
        'thirdLast' => $faker->lastName,
        'thirdEmail' => $faker->safeEmail,
        'thirdPhone' => $faker->phoneNumber,
    ];
});
