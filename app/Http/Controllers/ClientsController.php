<?php

namespace App\Http\Controllers;

use App\Client;
use  App\Entreprise;
use Illuminate\Http\Request;

class ClientsController extends Controller
{
    // méthode pour lister nos clients
    public function list() {
        /*$clients = Client::all();*/
        $clients = Client::status();

        $enterprises = Entreprise::all();

        /*return view('clients.index', [
            'clients' => $clients,
            '$enterprises' =>$enterprises
        ]);*/

        return view('clients.index', compact('clients','enterprises'));
    }

    public function store() {

        request()->validate([
            'name' => 'required|min:3',
            'email' => 'email|required',
            'status' => 'integer|required',
            'enterprise_id' => 'integer|required'
        ]);


        $name = request('name');
        $email = request('email');
        $status = request('status');
        $enterprise_id = request('enterprise_id');

        $client = new Client();
        $client->name = $name;
        $client->email = $email;
        $client->status = $status;
        $enterprise_id->enterprise_id = $enterprise_id;
        $client->save();

        //Client::create($data);

        return back();
    }
}
