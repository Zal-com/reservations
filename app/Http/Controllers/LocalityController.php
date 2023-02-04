<?php

namespace App\Http\Controllers;

use App\Models\Locality;
use Illuminate\Http\Request;
use App\Models\Location;


class LocalityController extends Controller
{
    public function index()
    {
        $localities = Locality::all();

        return view('localities/index', [
            'localities' => $localities
        ]);
    }

        public function show($id){
            $locations = Locality::all()->find($id)->locations;

            return view('localities.show', [
                'locations' => $locations
            ]);
        }
}
