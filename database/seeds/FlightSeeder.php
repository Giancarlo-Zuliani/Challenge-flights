<?php

use Illuminate\Database\Seeder;
use App\Flight;

class FlightSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

      factory(Flight::class, 1500) -> create();

    }
}
