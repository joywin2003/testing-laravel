<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});


Route::get('/jobs', function () {
    return view('jobs',
        [
            'jobs' => [
                [
                    "title" => "Programmer",
                    "salary" => "$80,000",
                ],
                [
                    "title" => "Designer",
                    "salary" => "$70,000",
                ],
                [
                    "title" => "Developer",
                    "salary" => "$90,000",
                ],
                [
                    "title" => "Manager",
                    "salary" => "$100,000",
                ],
                [
                    "title" => "CEO",
                    "salary" => "$200,000",
                ]
            ]
        ]
    );
});


Route::get('/contact', function () {
    return view('contact');
});
