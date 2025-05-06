<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vehicule;
use App\Models\Location;

class LocationController extends Controller
{
    public function index(Request $request)
    {
        $locations = Location::all()->load('vehicule');

        return view('locations.index', compact('locations'));
    }

    public function add(Request $request)
    {
        $vehicules = Vehicule::all();

        return view('locations.add', compact('vehicules'));
    }

    public function store(Request $request)
    {
        //
        $data = $request->validate([
            "email" => "required|email",
            "nom_prenom" => "required|string|min:3",
            "addresse" => "required|string|min:3",
            "vehicule_id" => "required|exists:vehicules,id",
            "date_retour" => "required|date"
        ]);

        $location = Location::create($data);

        return redirect(route('home'));
    }
}
