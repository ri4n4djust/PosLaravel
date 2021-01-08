<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Country;
use App\State;
use App\Kategori;

class CountryStateController extends Controller
{
    //
    public function getCountries()
    {
        $data = Kategori::get();
        return response()->json($data);
    }
    /**
     * Retrieve states data
     *
     */
    public function getStates(Request $request)
    {
        $data = State::where('country_id', $request->country_id)->get();
        return response()->json($data);
    }
}
