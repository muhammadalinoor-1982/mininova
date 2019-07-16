<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Registration extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'staff_name',
        'staff_email',
        'staff_phone',
        'staff_gender',
        'staff_image',
        'staff_password',
        'staff_status',
    ];
}
