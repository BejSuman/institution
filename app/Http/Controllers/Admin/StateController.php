<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\State;


class StateController extends Controller
{

    public function dbSync()
    {
        $data = [
            [
                'stateName' => 'Andhra Pradesh'
            ],

            [
                'stateName' => 'Arunachal Pradesh'
            ],

            [
                'stateName' => 'Assam'
            ],

            [
                'stateName' => 'Bihar'
            ],

            [
                'stateName' => 'Chhattisgarh'
            ],

            [
                'stateName' => 'Goa'
            ],

            [
                'stateName' => 'Gujarat'
            ],

            [
                'stateName' => 'Haryana'
            ],

            [
                'stateName' => 'Himachal Pradesh'
            ],

            [
                'stateName' => 'Jharkhand'
            ],

            [
                'stateName' => 'Karnataka'
            ],

            [
                'stateName' => 'Kerala'
            ],

            [
                'stateName' => 'Madhya Pradesh'
            ],

            [
                'stateName' => 'Maharashtra'
            ],

            [
                'stateName' => 'Manipur'
            ],

            [
                'stateName' => 'Meghalaya'
            ],

            [
                'stateName' => 'Mizoram'
            ],

            [
                'stateName' => 'Nagaland'
            ],

            [
                'stateName' => 'Odisha'
            ],

            [
                'stateName' => 'Punjab'
            ],

            [
                'stateName' => 'Rajasthan'
            ],

            [
                'stateName' => 'Sikkim'
            ],

            [
                'stateName' => 'Tamil Nadu'
            ],

            [
                'stateName' => 'Telangana'
            ],

            [
                'stateName' => 'Tripura'
            ],

            [
                'stateName' => 'Uttar Pradesh'
            ],

            [
                'stateName' => 'Uttarakhand'
            ],

            [
                'stateName' => 'West Bengal'
            ]

        ];
        foreach ($data as $item) {
            $state = new State();
            $state->fill($item);
            $state->save();
        }
    }
}
