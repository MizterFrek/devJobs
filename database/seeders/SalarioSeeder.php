<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SalarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('salarios')->insert([
            'salario' => '$0 - $499',
        ]);

        DB::table('salarios')->insert([
            'salario' => '$500 - $749',
        ]);

        DB::table('salarios')->insert([
            'salario' => '$750 - $999',
        ]);

        DB::table('salarios')->insert([
            'salario' => '$1000 - $1499',
        ]);

        DB::table('salarios')->insert([
            'salario' => '$1500 - $1999',
        ]);

        DB::table('salarios')->insert([
            'salario' => '$2000 - $2499',
        ]);

        DB::table('salarios')->insert([
            'salario' => '$2500 - $2999',
        ]);

        DB::table('salarios')->insert([
            'salario' => '$3000 - $4999',
        ]);

        DB::table('salarios')->insert([
            'salario' => '+$5000',
        ]);
    }
}
