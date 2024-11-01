<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});


Route::get('/jobs', function () {
    return view('jobs',
        [
            'jobs' => [
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
                ]
            ]
        ]
    );
});

Route::get('/jobs/{id}', function ($id) {
    $jobs = [
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
        ]
    ];
    $job = Arr::first($jobs, fn($job) => $job['id'] == $id);
    dd($job);
});


Route::get('/contact', function () {
    return view('contact');
});
