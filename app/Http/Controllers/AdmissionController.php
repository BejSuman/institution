<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admission;
use App\Models\State;
use Illuminate\Support\Facades\DB;

class AdmissionController extends Controller
{
    public function admission(){
        $countryNames =  DB::table('countries')->pluck('countryName','countryCode');
        $stateNames =  DB::table('states')->pluck('stateName','id');
        return view('pages.admission',compact('countryNames','stateNames'));
    }

    // --------------------------------------------
    // public function index(){
    //     return view('pages.admission',['state'=>State::orderBy('id','DESC')->get()]);
    // }
    // --------------------------------------------
}
