@extends('layout')

@section('content')

<h1>Nos Clients : {{$clients}}</h1>
<ul>
    @foreach($clients as $client)
    <li>{{ $client->name  }}  <em class="text-muted ml-4">{{$client->email}}</em> </li>

    @endforeach
</ul>
<hr style="color:black;">

<div class="container">
    <form action="/clients" method="post">
        @csrf
        <div class="form-group">
            <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" placeholder="Nom du Client">
            @error('name')
                <div class="invalid-feedback"> {{ $errors->first('name') }} </div>
            @enderror
        </div>

        <div class="form-group">
            <input type="text" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="Email du Client">
            @error('email')
            <div class="invalid-feedback"> {{ $errors->first('email') }} </div>
            @enderror
        </div>

        <div class="form-group">
            <select name="status" id="status" class="custom-select @error('status') is-invalid @enderror" name="status"">
                <option value="1">Actif</option>
                <option value="2">Inactif</option>
            </select>

            @error('status')
            <div class="invalid-feedback"> {{ $errors->first('status') }} </div>
            @enderror
        </div>
        <div class="form-group">
            <select class="custom-select @error('entreprise_id') is-invalid @enderror" name="entreprise_id"">
                @foreach($enterprises as $enterprise)
                    <option value="{{ $enterprise->id }}">{{ $enterprise->name }}</option>
                @endforeach
            </select>
            @error('entreprise_id')
            <div class="invalid-feedback"> {{ $errors->first('entreprise_id') }} </div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary mt-1" >Ajouter le client</button>
    </form>
</div>

@endsection
