<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DataController extends Controller
{
    //
    public function open() {
        $data = "data open without auth";
        return response()->json(compact('data'),200);
    }

    public function closed() {
        //$data = "only auth user can see this";
        $data = "welcome";
        return response()->json(compact('data'),200);
    }
}
