<?php

namespace Database\Seeders;

use App\Models\admin\section;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SectionSeeder extends Seeder
{
    public function run()
    {
         section::factory()->count(5)->create();

    }
}
