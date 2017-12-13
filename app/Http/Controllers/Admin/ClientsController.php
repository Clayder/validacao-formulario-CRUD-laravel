<?php

namespace App\Http\Controllers\Admin;

use App\Client;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ClientsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clients = \App\Client::all();
        return view('admin.clients.index', compact('clients'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.clients.create', ['client' => new Client()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validacao($request);
        $data = $request->all();
        $data['defaulter'] = $request->has('defaulter');
        Client::create($data);
        return redirect()->route('clients.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $client
     * @return \Illuminate\Http\Response
     */
    public function show(Client $client)
    {
        return view('admin.clients.show', compact('client'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $client = Client::findOrFail($id);
        return view('admin.clients.edit', compact('client'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $client = Client::find($id);
        $this->validacao($request);
        $data = $request->all();
        $data['defaulter'] = $request->has('defaulter');
        /**
         * Atualiza os dados do cliente respeitando o atributo $fillable do model
        */
        $client->fill($data);
        $client->save();
        return redirect()->route('clients.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $client
     * @return \Illuminate\Http\Response
     */
    public function destroy(Client $client)
    {
        $client->delete();
        return redirect()->route('clients.index');
    }

    private function validacao(Request $request){
        $mariatalStatus = implode(',', array_keys(Client::MARITAL_STATUS));
        $this->validate($request,[
            'name' => 'required|max:255',
            'document_number' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'date_birth' => 'required|date',
            'sex' => 'required|in:m,f',
            'marital_status' => "required|in: $mariatalStatus",
            'physical_disability' => 'max:255'
        ]);
    }
}
