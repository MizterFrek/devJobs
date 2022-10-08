<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categorias')->insert([
            'categoria' => 'Backend Developer',
        ]);

        DB::table('categorias')->insert([
            'categoria' => 'Front end Developer',
        ]);

        DB::table('categorias')->insert([
            'categoria' => 'Mobile Developer',
        ]);

        DB::table('categorias')->insert([
            'categoria' => 'Techlead',
        ]);

        DB::table('categorias')->insert([
            'categoria' => 'UX / UI Design',
        ]);

        DB::table('categorias')->insert([
            'categoria' => 'Software Architecture',
        ]);

        DB::table('categorias')->insert([
            'categoria' => 'Devops',
        ]);
    }
}
