<?php

namespace App\Http\Controllers;

use App\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    private $qtd = 5;

    function __construct()
    {
        $this->middleware(
            'permission:cliente-list',
            ['only' => ['index', 'show']]
        );

        $this->middleware(
            'permission:cliente-create',
            ['only' => ['create', 'store']]
        );

        $this->middleware(
            'permission:cliente-edit',
            ['only' => ['edit', 'update']]
        );

        $this->middleware(
            'permission:cliente-delete',
            ['only' => ['destroy']]
        );
    }

    public function index(Request $request)
    {
        $data = Client::orderBy('id', 'DESC')->paginate($this->qtd);

        return view('clients.index', compact('data'))->with('i', ($request->input('page', 1)) - 1 * $this->qtd);
    }

    public function create()
    {
        return view('clients.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'email|required',
            'address' => 'required'
        ]);

        $client = Client::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'address' => $request->input('address')
        ]);

        return redirect()->route('clients.index')->with('success', 'Cliente adicionado com sucesso');
    }

    public function show($id)
    {
        $client = Client::find($id);
        return view('clients.show', compact('client'));
    }

    public function edit($id)
    {
        $client = Client::find($id);

        return view('clients.edit', compact('client'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'email|required',
            'address' => 'required'
        ]);

        $client = Client::find($id);
        $input = $request->all();
        $client->update($input);

        return redirect()->route('clients.index')->with('success', 'Cliente atualizado');
    }

    public function destroy($id)
    {
        Client::find($id)->delete();

        return redirect()->route('clients.index')->with('success', 'Cliente removido');
    }
}
