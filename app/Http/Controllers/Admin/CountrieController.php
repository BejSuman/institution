<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Country;
use Illuminate\Http\Request;

class CountrieController extends Controller
{
    public function dbSync()
    {
        $data = [
            [
                'countryCode' => 1,
                'countryName' => 'India'
            ],
        ];
        foreach ($data as $item) {
            $state = new Country();
            $state->fill($item);
            $state->save();
        }
    }
}
