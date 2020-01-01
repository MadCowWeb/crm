<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Client;

class ClientsController extends Controller
{
    public function index() {

        $clients = Client::sortable()->paginate(40);

        return view('clients.index', compact('clients'));
    
    }


     /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $clients=array('clients');

        return view('clients.create', compact('clients'));
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store() {

        $clients = new Client();
        $clients->companyName = request('companyName');
        $clients->companyAddress1 = request('companyAddress1');
        $clients->companyAddress2 = request('companyAddress2');
        $clients->companyCity = request('companyCity');
        $clients->companyState = request('companyState');
        $clients->companyZip = request('companyZip');
        $clients->ownerFirst = request('ownerFirst');
        $clients->ownerLast = request('ownerLast');
        $clients->ownerPhone = request('ownerPhone');
        $clients->ownerEmail = request('ownerEmail');
        $clients->companyWebsite = request('companyWebsite');
        $clients->companyPhone = request('companyPhone');
        $clients->companyAddress1 = request('companyAddress1');
        $clients->companyAddress2 = request('companyAddress2');
        $clients->companyCity = request('companyCity');
        $clients->companyState = request('companyState');
        $clients->companyZip = request('companyZip');
        $clients->domainRegistrar = request('domainRegistrar');
        $clients->nameServers = request('nameServers');
        $clients->webHost = request('webHost');
        $clients->emailProvider = request('emailProvider');
        $clients->monthlyBilling = request('monthlyBilling');  
        $clients->billingNotes = request('billingNotes');
        $clients->ownerFirst = request('ownerFirst');
        $clients->ownerLast = request('ownerLast');
        $clients->ownerEmail = request('ownerEmail');
        $clients->ownerPhone = request('ownerPhone');
        $clients->secondFirst = request('secondFirst');
        $clients->secondLast = request('secondLast');
        $clients->secondEmail = request('secondEmail');
        $clients->secondPhone = request('secondPhone');
        $clients->thirdFirst = request('thirdFirst');
        $clients->thirdLast = request('thirdLast');
        $clients->thirdEmail = request('thirdEmail');
        $clients->thirdPhone = request('thirdPhone');
        $clients->save();

        return redirect('/clients');
   
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $client = \DB::table('clients')->find($id);
        return view('clients.show', compact('client'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

}
