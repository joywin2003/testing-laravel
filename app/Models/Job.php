<?php

namespace App\Models;

use Illuminate\Support\Arr;

class Job {
    public static function all(): array{
        return [
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
        ];
    }
    public static function find(int $id): array{
        return Arr::first(self::all(), fn($job) => $job['id'] == $id);
    }
};
