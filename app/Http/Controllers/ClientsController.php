<?php

namespace App\Http\Controllers;

use App\Client;
use  App\Entreprise;
use Illuminate\Http\Request;

class ClientsController extends Controller
{
    // méthode pour lister nos clients
    public function index() {

        $clients = Client::all();
       return view('clients.index', compact('clients'));
    }

    //create

    public function create() {
        $enterprises = Entreprise::all();

        $client= new Client();

        return view('clients.create', compact('enterprises', 'client'));
    }

    //add new custummer
    public function store() {

        request()->validate([
            'name' => 'required|min:3',
            'email' => 'email|required',
            'status' => 'integer|required',
            'entreprise_id' => 'integer|required'
        ]);


        $name = request('name');
        $email = request('email');
        $status = request('status');
        $entreprise_id = request('entreprise_id');

        $client = new Client();
        $client->name = $name;
        $client->email = $email;
        $client->status = $status;
        $client->entreprise_id = $entreprise_id;
        $client->save();

        return back();
    }

    //display custumer data information
    public function show(Client $client) {

        //$client = Client::where('id', $client)->firstOrFail();

        return view('clients.show', compact('client'));
    }


    //edit view of custumer
    public function edit(Client $client) {

        //$client = Client::where('id', $client)->firstOrFail();
        $enterprises = Entreprise::all();

        return view('clients.edit', compact('client', 'enterprises'));
    }


    //Update the information of custumer
    public function update(Client $client) {

        $data = request()->validate([
            'name' => 'required|min:3',
            'email' => 'email|required',
            'status' => 'integer|required',
            'entreprise_id' => 'integer|required'
        ]);

        $client->update($data);

        return redirect('clients/'.$client->id);
    }

    //delete custumer
    public function destroy(Client $client) {
        $client->delete();
        return redirect('clients');
    }
}
