<?php

namespace Database\Seeders;

use App\Models\Practicante;
use Illuminate\Database\QueryException;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PracticanteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Practicante::factory(50)->create();
    }
}
