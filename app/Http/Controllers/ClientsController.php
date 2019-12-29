<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Client;

class ClientsController extends Controller
{
    public function show($ownerTitle) {


        return view('client', [
            'client' => Client::where('ownerTitle', $ownerTitle)->firstOrFail()
        ]);

        //return view('client', compact('clients'));


    }
}
