<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->truncate();
        DB::table('categories')->insert([
            [
                'name' => 'Verb'
            ],
            [
                'name' => 'Adjective'
            ],
            [
                'name' => 'Adverb'
            ],
            [
                'name' => 'Idiom'
            ],
            [
                'name' => 'Slang'
            ],
            [
                'name' => 'Phrasal Verb'
            ],
            [
                'name' => 'Noun'
            ],
            [
                'name' => 'Preposition'
            ],
            [
                'name' => 'Conjunction'
            ],
            [
                'name' => 'Interjection'
            ],
        ]);
    }
}
