@extends('layout')

@section('content')

<h1 class="lead my-3 text-center">Ajouter un nouveau Clients : </h1>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-6">
            <form action="/clients" method="post">
                @include('includes.form')
                <button type="submit" class="btn btn-primary mt-1">Ajouter le client</button>
            </form>
        </div>
    </div>
</div>

@endsection
