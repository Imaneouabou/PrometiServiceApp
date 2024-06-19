<?php
  
namespace App\Http\Controllers;
  
use Illuminate\Http\Request;
use App\Models\Actu;
 
class actualiteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $actualite = actu::orderBy('created_at', 'DESC')->get();
  
        return view('actualites.index', compact('actualite'));
    }
  
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('actualites.create');
    }
  
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        actu::create($request->all());
 
        return redirect()->route('actualites')->with('success', 'Actualité ajoutée avec succés');
    }
  
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $actualite = actu::findOrFail($id);
  
        return view('actualites.show', compact('actualite'));
    }
  
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $actualite = actu::findOrFail($id);
  
        return view('actualites.edit', compact('actualite'));
    }
  
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $actualite = actu::findOrFail($id);
  
        $actualite->update($request->all());
  
        return redirect()->route('actualites')->with('success', 'Actualité modifiée avec succés');
    }
  
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $actualite = actu::findOrFail($id);
  
        $actualite->delete();
  
        return redirect()->route('actualites')->with('success', 'Actualité supprimée avec succés ');
    }
}