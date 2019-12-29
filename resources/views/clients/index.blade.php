@extends('layouts.master')

@section('title')
    Mad Cow CMS Clients
@endsection

@section('content')

<h1>Our Awesome Clients</h1>
<a class="btn btn-primary mb-3" role="button" href="/create/">New Client</a>
<section>
    <table class="table table-bordered">
        <thead class="thead-light">
        <tr>
            <th>@sortablelink('companyName', 'Company Name')</th>
            <th>@sortablelink('ownerFirst', 'Contact First')</th>
            <th>@sortablelink('ownerLast', 'Contact Last')</th>
            <th>Company Phone</th>
            <th>Email</th>
        </tr>
    </thead>
        @if($clients->count())
            @foreach($clients as $client)
                <tr>
                    <td><a href="/clients/{{ $client->id }}">{{ $client->companyName }}</a></td>
                    <td>{{ $client->ownerFirst }}</td>
                    <td>{{ $client->ownerLast }}</td>
                    <td>{{ $client->ownerPhone }}</td>
                    <td>{{ $client->ownerEmail }}</td>
                </tr>
            @endforeach
        @endif
    </table>
 </section>
    {!! $clients->appends(request()->except('page'))->render() !!}
@endsection
