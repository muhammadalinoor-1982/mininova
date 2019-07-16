<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    protected $fillable = [

        'doctor_name',
        'doctor_password',
        'doctor_degree',
        'doctor_speciality',
        'doctor_fellowship',
        'doctor_year_of_experience',
        'doctor_position',
        'doctor_email',
        'doctor_phone',
        'doctor_facebook',
        'doctor_twitter',
        'doctor_instagram',
        'doctor_youtube',
        'doctor_status',
        'doctor_image',
    ];
}
