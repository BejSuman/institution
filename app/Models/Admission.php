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
        'student_phone_number',
    ];
}
