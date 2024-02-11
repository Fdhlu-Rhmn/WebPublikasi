<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    public function run()
    {
        \App\Models\Books::factory(10)->create();
    }
}
