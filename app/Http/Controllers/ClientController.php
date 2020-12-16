<?php

namespace App\Http\Controllers;

use App\Http\Requests\ClientRequest;
use App\Models\Client;
use App\Models\User;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    private $objClient;
    private $objUser;

    public function __construct()
    {
        $this->objClient = new Client();
        $this->objUser = new User();
    }

    public function index()
    {
        $client = $this->objClient->paginate(50);
        return view('home', compact('client'));
    }

    public function create()
    {
        $users = $this->objUser->all();
        return view('create',compact('users'));
    }

    public function store(ClientRequest $request)
    {
        $cad = Client::create([
            'name'=>$request->name,
            'cpf'=>$request->cpf,
            'galc'=>$request->galc,
            'porta'=>$request->porta,
            'speed'=>$request->speed,
            'adress'=>$request->adress,
            'id_user'=>$request->id_user,
        ]);
        if($cad){
            return redirect('clients');
        }

}

    public function show($id)
    {
        $client = $this->objClient->find($id);
        return view('show',compact('client'));
    }

    public function edit($id)
    {
        $client = $this->objClient->find($id);
        $users = $this->objUser->all();
        return view('create',compact('client', 'users'));
    }

    public function update(ClientRequest $request, $id)
    {
        Client::where(['id'=>$id])->update([
            'name'=>$request->name,
            'cpf'=>$request->cpf,
            'galc'=>$request->galc,
            'porta'=>$request->porta,
            'speed'=>$request->speed,
            'adress'=>$request->adress,
            'id_user'=>$request->id_user,
        ]);
        return redirect('clients');
    }

    public function destroy($id)
    {
        $del = $this->objClient->destroy($id);
        return($del)?"sim":"não";
    }
}
