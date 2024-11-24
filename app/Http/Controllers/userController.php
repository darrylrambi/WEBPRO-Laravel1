<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class userController extends Controller
{
    //
    function simpan(Request $request) {
        $request->session()->put('Nama', $request->input('Nama'));

        // lempar ke page userData sesuai yang ada pada route
        return redirect('userData');

    }
}
