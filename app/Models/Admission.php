<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class Admission extends Model
{
    public function __construct()
    {
    }
    protected $table = 'admissions';
    protected $fillable = [
        'student_name',
        'guardians_name',
        'student_phone_number',
        'guardians_phone_number',
        'student_whatsapp_number',
        'guardians_whatsapp_number',
        'country',
        'state',
        'address',
        'pin',
        'last_exam',
        'current_course',
        'course',
        'course_duration',
    ];
}
