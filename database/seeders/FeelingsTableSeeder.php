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
        Feeling::truncate();

        Feeling::create(['name' => 'happy']);
        Feeling::create(['name' => 'romantic']);
        Feeling::create(['name' => 'sad']);
        Feeling::create(['name' => 'angry']);
        Feeling::create(['name' => 'panicked']);
        Feeling::create(['name' => 'curious']);

    }
}
