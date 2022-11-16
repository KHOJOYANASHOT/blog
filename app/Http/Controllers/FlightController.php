<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Flight;

class FlightController extends Controller
{
    public function index()
    {
        // $flights = Flight::all();  //DB:table('flights')->get();
        // foreach ($flights as $flight) {
        //     echo $flight->name . "<br>";
        // }
        // $flight = Flight::where('number', 'FR-456')->first();
        // $flight->number = 'FR-456';
        // // $flight->refresh();
        // echo $flight->number; // "FR 900"
        // $flight->save();
        $max = Flight::orderBy('price','desc')->first();
        dd($max);
    }
}
