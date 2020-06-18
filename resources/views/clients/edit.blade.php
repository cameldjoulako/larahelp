@extends('layout')

@section('content')

<h1 class="lead my-3 text-center">Editer le profil de : {{ $client->name }} </h1>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-6">
            <form action="/clients/{{ $client->id }}" method="post">
                @method('PATCH')
                @include('includes.form')
                <button type="submit" class="btn btn-primary mt-1">Sauvegarder les informations</button>
            </form>
        </div>
    </div>
</div>

@endsection
