<?php
  
namespace App\Http\Controllers;
  
use Illuminate\Http\Request;
use App\Models\Client;
 
class clientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $client = client::orderBy('created_at', 'DESC')->get();
  
        return view('clients.index', compact('client'));
    }
  
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('clients.create');
    }
  
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        client::create($request->all());
 
        return redirect()->route('clients')->with('success', 'Client ajouté avec succés');
    }
  
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $client = client::findOrFail($id);
  
        return view('clients.show', compact('client'));
    }
  
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $client = client::findOrFail($id);
  
        return view('clients.edit', compact('client'));
    }
  
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $client = client::findOrFail($id);
  
        $client->update($request->all());
  
        return redirect()->route('clients')->with('success', 'Client modifié avec succés');
    }
  
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $client = client::findOrFail($id);
  
        $client->delete();
  
        return redirect()->route('clients')->with('success', 'Client supprimé avec succés ');
    }
}