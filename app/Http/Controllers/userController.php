<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class userController extends Controller
{
    //
    function simpan(Request $request) {
        // $request

        // lempar ke page userData sesuai yang ada pada route
        return redirect('userData');

    }
}
