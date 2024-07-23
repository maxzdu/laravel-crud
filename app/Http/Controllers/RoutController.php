<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\client;

class RoutController extends Controller
{
    public function index (){
        return view('auth/login');
    }
    public function clients (){
        $clients=client::all();
        return view('clients') ->with('clients',$clients);
    }
    public function newclient (){
        return view('newclient');
    }
    public function show(string $id)
    {
        $client = client::findOrFail($id);
  
        return view('client.show', compact('client'));
    }

    public function store(Request $request){
        client::create($request->all());
        return redirect()->route('clients')->with('success', 'Client added successfully');
    }
    public function edit(string $id)
    {
        $client = client::findOrFail($id);
  
        return view('client.edit', compact('client'));
    }
    public function update(Request $request, string $id)
    {
        $client = client::findOrFail($id);
  
        $client->update($request->all());
  
        return redirect()->route('clients')->with('success', 'Client updated successfully');
    }
    public function destroy(string $id)
    {
        $client = client::findOrFail($id);
  
        $client->delete();
  
        return redirect()->route('clients')->with('success', 'Client deleted successfully');
    }
}
