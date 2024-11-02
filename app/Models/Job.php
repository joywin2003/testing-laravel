<?php

namespace App\Models;

use Illuminate\Support\Arr;
use Illuminate\Database\Eloquent\Model;

class Job extends Model{


    protected $table = 'job_listings';
    // public static function find(int $id){
    //     $jobs =  Arr::first(self::all(), fn($job) => $job['id'] == $id);
    //     if(!$jobs){
    //         abort(404);
    //     }
    //     return $jobs;
    // }
};
