<?php

namespace Database\Seeders;
use App\Models\Arquitetura;
use Illuminate\Database\Seeder;

class ArquiteturaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Arquitetura::create(['nome' => 'ARM']);
        Arquitetura::create(['nome' => 'X86']);
        Arquitetura::create(['nome' => 'X64']);
    }
}
