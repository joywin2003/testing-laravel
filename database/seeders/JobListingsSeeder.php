<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JobListingsSeeder extends Seeder
{
    public function run()
    {
        DB::table('job_listings')->insert([
            [
                "id" => 1,
                "title" => "Programmer",
                "salary" => "$80,000",
            ],
            [
                "id" => 2,
                "title" => "Designer",
                "salary" => "$70,000",
            ],
            [
                "id" => 3,
                "title" => "Developer",
                "salary" => "$90,000",
            ],
            [
                "id" => 4,
                "title" => "Manager",
                "salary" => "$100,000",
            ],
            [
                "id" => 5,
                "title" => "CEO",
                "salary" => "$200,000",
            ],
        ]);
    }
}
