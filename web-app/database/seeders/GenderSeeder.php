<?php

namespace Database\Seeders;

use DB;
use App\Models\Gender;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class GenderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        DB::table('genders')->insert([
            ['name' => 'Male',],
            ['name' => 'Female',],
        ]);

    }
}
