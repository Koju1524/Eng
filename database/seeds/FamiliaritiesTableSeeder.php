<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FamiliaritiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('familiarities')->truncate();
      DB::table('familiarities')->insert([
          [
              'degree' => 'never'
          ],
          [
              'degree' => 'heard'
          ],
          [
              'degree' => 'understand'
          ],
          [
              'degree' => 'internalization'
          ],
      ]);
    }
}
