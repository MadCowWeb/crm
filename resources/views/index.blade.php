@extends('layouts.master')

@section('title')
    Mad Cow CMS Clients
@endsection

@section('content')

<h1>Mad Cow Web Design Clients</h1>
<a class="btn btn-primary mb-3" role="button" href="/create/">New Client</a>
<section>
    <table class="table table-bordered">
        <thead class="thead-light">
        <tr>
            <th>@sortablelink('company_name', 'Company Name')</th>
            <th>@sortablelink('primary_contact_first', 'Contact First')</th>
            <th>@sortablelink('primary_contact_last', 'Contact Last')</th>
            <th>Company Phone</th>
            <th>Email</th>
        </tr>
    </thead>
        @if($clients->count())
            @foreach($clients as $client)
                <tr>
                    <td><a href="/clients/{{ $client->id }}">{{ $client->company_name }}</a></td>
                    <td>{{ $client->primary_contact_first }}</td>
                    <td>{{ $client->primary_contact_last }}</td>
                    <td>{{ $client->primary_phone }}</td>
                    <td>{{ $client->primary_email }}</td>
                </tr>
            @endforeach
        @endif
    </table>
 </section>
    {!! $clients->appends(request()->except('page'))->render() !!}
@endsection
