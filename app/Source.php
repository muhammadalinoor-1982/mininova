<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Source extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'service_name',
        'drags_name',
        'medical_test',
        'status',
        'created_by',
        'updated_by',
    ];
}
