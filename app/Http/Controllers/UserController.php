<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class UserController extends Controller
{
    public function index()
    {
        DB::table('users')
        ->updateOrInsert(
        ['email' => 'john@example.com', 'name' => 'John'],
        ['password' => '123']
        );                 
    }

    public function show($id)
    {
        return "This is User with ID $id";
    }

}
