<?php
  
namespace App\Http\Controllers;
  
use Illuminate\Http\Request;
use App\Models\Projet;
 
class projetController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $projet = projet::orderBy('created_at', 'DESC')->get();
  
        return view('projets.index', compact('projet'));
    }
  
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('projets.create');
    }
  
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        projet::create($request->all());
 
        return redirect()->route('projets')->with('success', 'Projet ajouté avec succés');



    }
  
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $projet = projet::findOrFail($id);
  
        return view('projets.show', compact('projet'));
    }
  
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $projet = projet::findOrFail($id);
  
        return view('projets.edit', compact('projet'));
    }
  
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $projet = projet::findOrFail($id);
  
        $projet->update($request->all());
  
        return redirect()->route('projets')->with('success', 'Projet modifié avec succés');
    }
  
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $projet = projet::findOrFail($id);
  
        $projet->delete();
  
        return redirect()->route('projets')->with('success', 'Projet supprimé avec succés ');
    }

    
    
    }


