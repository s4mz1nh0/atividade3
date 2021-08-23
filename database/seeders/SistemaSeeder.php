<?php

namespace Database\Seeders;

use App\Models\Sistema;
use Illuminate\Database\Seeder;

class SistemaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Sistema::create(['nome' => 'Android - Smartphone']);
        Sistema::create(['nome' => 'IOS - Smartphone']);
        Sistema::create(['nome' => 'Windows - PC']);
        Sistema::create(['nome' => 'Linux - PC']);
        Sistema::create(['nome' => 'Mac OS X - PC']);
    }
}
