@extends('layouts.master')

@section('title')
    Mad Cow CMS Clients
@endsection

@section('content')

<h1>Our Awesome Clients</h1>
<section>
    <table class="table table-bordered">
        <thead class="thead-light">
        <tr>
            <th>@sortablelink('companyName', 'Company Name')</th>
            <th>@sortablelink('ownerFirst', 'Owner First')</th>
            <th>@sortablelink('ownerLast', 'Owner Last')</th>
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
