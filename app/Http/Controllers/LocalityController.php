<?php

namespace App\Http\Controllers;

use App\Models\Locality;
use Illuminate\Http\Request;


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
            $locality = Locality::all()->find($id);

            return view('localities.show', [
                'locality' => $locality
            ]);
        }
}
