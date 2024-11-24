<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class userController extends Controller
{
    //
    function simpan(Request $request) {
        $request->session()->put('Nama', $request->input('Nama'));
        $request->session()->put('NIM', $request->input('NIM'));

        // lempar ke page userData sesuai yang ada pada route
        return redirect('userData');

    }
}