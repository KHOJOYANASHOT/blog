<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Ui\Presets\React;
use Illuminate\Support\Facades\DB;


class ABCController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('terminate');
    // }
    // public function index(Request $request)
    // {
    //     $request->session()->put('key', 1);
    //     $request->session()->flush();
    //     dd($request->session()->get('key'));
    // }

    public function index()
    {
        $countries = DB::table('countries')->paginate(15);
        return view(
            'countries.index',
            ['countries' => $countries]
        );
    }
}
