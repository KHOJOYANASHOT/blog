<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index(Request $request)
    {
        // DB::table('users')
        // ->updateOrInsert(
        // ['email' => 'john@example.com', 'name' => 'John'],
        // ['password' => '123']
        // );                 

        $user = Auth::user();
        echo $user?->name;

        $params = $request->all();
        // dd($request->path());
        // dd($request->url());
        // dd($request->fullurl());  
        // dd($request->method());
        // dd($request->isMethod('get'));

        $name = $request->input('name', 'Vardan Mamikonyan');
        dd($name);
    
    
    }

    public function show($id)
    {
        return "This is User with ID $id";
    }
}
