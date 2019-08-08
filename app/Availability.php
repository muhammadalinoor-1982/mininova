<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class availability extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'doctors_id',
        'availability_of_doctors',
        'created_by',
        'updated_by',
    ];
}
