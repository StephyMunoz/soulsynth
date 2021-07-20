<?php

namespace Database\Seeders;

use App\Models\Feeling;
use Illuminate\Database\Seeder;

class FeelingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Feeling::truncate();

        Feeling::create(['f_name' => 'happy']);
        Feeling::create(['f_name' => 'romantic']);
        Feeling::create(['f_name' => 'sad']);
        Feeling::create(['f_name' => 'angry']);
        Feeling::create(['f_name' => 'panicked']);
        Feeling::create(['f_name' => 'curious']);

    }
}
