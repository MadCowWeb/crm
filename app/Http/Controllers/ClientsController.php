<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Client;

class ClientsController extends Controller
{
    public function index() {

        $clients = Client::all();

        return view('clients', compact('clients'));
    
    }

    public function store() {

        Client::create(request(['companyName', 'ownerName', 'ownerTitle']));

        return redirect('/clients');

    
    }

}
