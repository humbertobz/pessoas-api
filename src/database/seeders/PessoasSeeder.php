<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PessoasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();

        DB::table('pessoas')->insert([
            'nome' => $faker->name(),
            'sexo' => $faker->randomElement(['Masculino' ,'Feminino', 'Outro']),
            'peso' => $faker->randomFloat(2, 45, 150),
            'altura' => $faker->randomFloat(2, 1.4, 2.5),
            'imc' => $faker->randomFloat(1, 15, 50),
            'created_at' => Carbon::now(),
        ]);
    }
}
