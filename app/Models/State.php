<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    public function __construct()
    {
    }
    protected $table = 'states';

    protected $fillable = [
        'stateName',
    ];

}
