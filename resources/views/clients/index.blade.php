@extends('layout')

@section('content')

<h1>Nos Clients</h1>
<a href="/client/create" class="btn btn-primary my-3">Nouveau Client</a>
<ul>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nom</th>
                <th scope="col">Status</th>
                <th scope="col">Email</th>
                <th scope="col">Entreprise</th>
            </tr>
        </thead>
        <tbody>
            @foreach($clients as $client)
            <tr>
                <th scope="row">{{ $client->id }}</th>
                <td><a href="/clients/{{ $client->id }}">{{ $client->name }}</a></td>
                <td>{{ $client->status }}</td>
                <td>{{ $client->email }}</td>
                <td>{{ $client->entreprise->name }}</td>
            </tr>
            @endforeach
        </tbody>

    </table>
</ul>
@endsection
