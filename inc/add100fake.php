<?php
require_once 'db.php';

$faker = Faker\Factory::create("fa_IR");

use Illuminate\Database\Capsule\Manager as Capsule;

for ($i = 0; $i < 100; $i++) {


    $add100fake = Capsule::table('students')->insertGetId([
        'name' => $faker->firstName,
        'lastname' => $faker->lastName,
        'code' => rand(100000000, 9999999999),
        'nid' => rand(100000000, 999999999),
        'password'=> md5(rand(10000000,99999999)),
        'dob'=> $faker->dateTimeBetween("-50year" , "-18year"),
        'address'=>$faker->address(),
        'mobile'=>$faker->phoneNumber(),
        'field'=>$faker->jobTitle(),
    ]);

}