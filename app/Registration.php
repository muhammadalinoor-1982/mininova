<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Registration extends Model
{
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
