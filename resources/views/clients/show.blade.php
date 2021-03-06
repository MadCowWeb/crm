@extends('layouts.master')

@section('title')
    Mad Cow CMS Clients
@endsection

@section('content')
<h1>Client Details</h1>
<h2>{{ $client->companyName }}</h2>
<section class="client-details">
    <div>
        <h3>Address:</h3>
        <p>{{ $client->companyAddress1 }}</p>
        <p>{{ $client->companyAddress2 }}</p>
        <p>{{ $client->companyCity }}, {{ $client->companyState }} {{ $client->companyZip }}</p>
    </div>
    <div>
        <h3>Primary Contact:</h3>
        <p>Name: {{ $client->ownerFirst }} {{ $client->ownerLast }}</p>
        <p>Phone: {{ $client->ownerPhone }}</p>
        <p>Email: <a href="mailto:{{ $client->ownerEmail }}">{{ $client->ownerEmail }}</a></p>
    </div>
    <div>
        <h3>Contact 2:</h3>
        <p>Name: {{ $client->secondFirst }} {{ $client->secondLast }}</p>
        <p>Phone: {{ $client->secondPhone }}</p>
        <p>Email: <a href="mailto:{{ $client->secondEmail }}">{{ $client->secondEmail }}</a></p>
    </div>
    <div>
        <h3>Contact 3:</h3>
        <p>Name: {{ $client->thirdFirst }} {{ $client->thirdLast }}</p>
        <p>Phone: {{ $client->thirdPhone }}</p>
        <p>Email: <a href="mailto:{{ $client->thirdEmail }}">{{ $client->thirdEmail }}</a></p>
    </div>
    </section>
    <section>      
    <div>
        <p>Monthly Fee: {{ $client->monthlyBilling }}</p>
        <p>Billing Notes: {{ $client->billingNotes }}</p>
    </div>


    <table class="table table-bordered">
        <thead class="thead-light">
        <tr>
            <th>Domain</th>
            <th>Registrar</th>
            <th>Name Servers</th>
            <th>Web Host</th>
            <th>Email Provider</th>
        </tr>
    </thead>
                <tr>
                    <td><a href="http://{{ $client->companyWebsite }}"target="_blank">{{ $client->companyWebsite }}</a></td>
                    <td><a href="{{ $client->domainRegistrar }}"target="_blank">{{ $client->domainRegistrar }}</a></td>
                    <td><a href="{{ $client->nameServers }}"target="_blank">{{ $client->nameServers }}</a></td>
                    <td><a href="{{ $client->webHost }}"target="_blank">{{ $client->webHost }}</a></td>
                    <td><a href="{{ $client->emailProvider }}"target="_blank">{{ $client->emailProvider }}</a></td>
                </tr>
    </table>



</section>
@endsection
