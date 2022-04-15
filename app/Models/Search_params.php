<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Search_params extends Model
{
    protected $fillable = [
        'criterion',
        'job',
        'query',
    ];
}
