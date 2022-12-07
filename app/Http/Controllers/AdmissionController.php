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
    public function store(Request $request): \Illuminate\Http\JsonResponse
    {

        $student = new Admission();

        $student->student_name = $request->post('student_name');
        $student->guardians_name = $request->post('guardians_name');
        $student->student_phone_number = $request->post('student_phone_number');
        $student->guardians_phone_number = $request->post('guardians_phone_number');
        $student->student_whatsapp_number = $request->post('student_whatsapp_number');
        $student->guardians_whatsapp_number = $request->post('guardians_whatsapp_number');
        $student->country = $request->post('country');
        $student->state = $request->post('state');
        $student->address = $request->post('address');
        $student->pin = $request->post('pin');
        $student->last_exam = $request->post('last_exam');
        $student->current_course = $request->post('current_course');
        $student->course = $request->post('course');
        $student->course_duration = $request->post('course_duration');

        $student->save();
        // return redirect()->back()->withSuccess("Submit Successfully");
        return response()->json(['bool'=>true]);

    }
}
