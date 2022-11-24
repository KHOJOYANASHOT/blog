<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{
    public function accessSessionData(Request $request)
    {
        if ($request->session()->has('my_name'))
            echo $request->session()->get('my_name');
        else
            echo 'No data';
    }
    public function storeSessionData(Request $request)
    {
        $request->session()->put('my_name', 'Bill Gates');
        echo "Data has been added";
    }
    public function deleteSessionData(Request $request)
    {
        $request->session()->forget('my_name');
        echo "Data has been removed";
    }
}
