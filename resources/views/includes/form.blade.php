@csrf
<div class="form-group">
    <input type="text"
        class="form-control @error('name') is-invalid @enderror"
        name="name"
        placeholder="Nom du Client"
        value="{{ old('name')  ?? $client->name }}">
    @error('name')
        <div class="invalid-feedback"> {{ $errors->first('name') }} </div>
    @enderror
</div>

<div class="form-group">
    <input type="text"
        class="form-control @error('email') is-invalid @enderror"
        name="email" placeholder="Email du Client"
        value="{{ old('email') ?? $client->email }}">
    @error('email')
    <div class="invalid-feedback"> {{ $errors->first('email') }} </div>
    @enderror
</div>

<div class="form-group">
    <select name="status" id="status"
        class="custom-select @error('status') is-invalid @enderror"
        name="status">
        @foreach($client->getStatusOptions() as $key => $value)
            <option value="{{ $key }}" {{ $client->status == $value ? 'selected' : ''}}>{{ $value }}</option>
        @endforeach
    </select>

    @error('status')
    <div class="invalid-feedback"> {{ $errors->first('status') }} </div>
    @enderror
</div>
<div class="form-group">
    <select class="custom-select @error('entreprise_id') is-invalid @enderror" name="entreprise_id">
        @foreach($enterprises as $enterprise)
            <option value="{{ $enterprise->id }}" {{ $client->entreprise_id == $enterprise->id ? 'selected' : '' }}>{{ $enterprise->name }}</option>
        @endforeach
    </select>
    @error('entreprise_id')
    <div class="invalid-feedback"> {{ $errors->first('entreprise_id') }} </div>
    @enderror
</div>
