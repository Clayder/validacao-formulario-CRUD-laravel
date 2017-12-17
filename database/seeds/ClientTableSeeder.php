<?php

use Illuminate\Database\Seeder;

class ClientTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Client::class, 5)->states(\App\Client::TYPE_INDIVIDUAL)->create();
        factory(\App\Client::class, 5)->states(\App\Client::TYPE_LEGAL)->create();
    }
}
