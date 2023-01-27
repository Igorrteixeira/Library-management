<?php

namespace Database\Seeders;

use App\Models\Genre;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        // Genre::factory(8)->create()
        DB::table('genres')->insert(
            [
                [
                    'genre' => 'Romance'
                ],
                [
                    'genre' => 'Terror'
                ],
                [
                    'genre' => 'Ação aventura'
                ],
                [
                    'genre' => 'Fantasia'
                ],
                [
                    'genre' => 'Biografia'
                ],
                [
                    'genre' => 'Humor'
                ],
                [
                    'genre' => 'Tecnologia e Ciência'
                ],
                [
                    'genre' => 'História'
                ],
                [
                    'genre' => 'Arte'
                ],
                [
                    'genre' => 'Infantil'
                ],

            ]
        );
    }
}
