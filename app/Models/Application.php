<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
 class Application extends Model
{
    use HasFactory,SoftDeletes;

     public $timestamps = false;

    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'date_of_bird',
        'phone',
        'job',
        'previous_experience',
        'status',
        'submited_date',
    ];
}
