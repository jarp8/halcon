<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\User;

use Illuminate\Http\Request;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clients = Client::all();
        return view('clients.index', compact('clients'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('clients.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = User::create([
            'name' => $request->name,
            'email' => "$request->rfc@hotmail.com",
            'password' => "th123"
        ]);
        
        $attrs = array_merge($request->all(), [
            'user_id' => $user->id,
			'created_by' => auth()->id(),
			'updated_by' => auth()->id(),
			'created_at' => date("Y-m-d H:i:s"),
			'updated_at' => date("Y-m-d H:i:s")
        ]);

        try{
            $client = Client::create($attrs);
            session()->flash('message', "Cliente creado correctamente");
        }catch(\Illuminate\Database\QueryException $ex){
            session()->flash('error', "Error inesperado al intentar agregar cliente");
        }

        return redirect()->route('clients.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $client = Client::find($id);

        return view('clients.edit', compact('client'));
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
        try{
            $client = Client::where('user_id', $request->user_id)->first();
            $attrs = array_merge($request->all(), [
                'updated_by' => auth()->id(),
            ]);
    
            $client->update($attrs);

            session()->flash('message', "Cliente modificado correctamente");
        }catch(\Illuminate\Database\QueryException $ex){
            session()->flash('error', "Error inesperado al intentar modificar cliente");
        }

        return redirect()->route('clients.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try{
            $client = Client::find($id);
            $client->user->delete();
            session()->flash('message', "Cliente eliminado correctamente");
        }catch(\Illuminate\Database\QueryException $ex){
            session()->flash('error', "Error inesperado al intentar eliminar cliente");
        }

        return redirect()->route('clients.index');
    }
}
