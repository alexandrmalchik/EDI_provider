<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    protected $table = 'files';

    protected $casts = [
        'data' => 'array'
    ];

    protected $fillable = [
        'name', 'data'
    ];
}
