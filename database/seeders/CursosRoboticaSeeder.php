<?php

namespace Database\Seeders;

use App\Models\CursosRobotica;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CursosRoboticaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        CursosRobotica::factory(100)->create();
    }
}
