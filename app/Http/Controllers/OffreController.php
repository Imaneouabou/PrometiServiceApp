<?php
  
namespace App\Http\Controllers;
  
use Illuminate\Http\Request;
use App\Models\offre;
 
class offreController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $offre = offre::orderBy('created_at', 'DESC')->get();
  
        return view('offres.index', compact('offre'));
    }
  
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('offres.create');
    }
  
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        offre::create($request->all());
 
        return redirect()->route('Offres')->with('success', 'offre ajouté avec succés');
    }
  
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $offre = offre::findOrFail($id);
  
        return view('offres.show', compact('offre'));
    }
  
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $offre = offre::findOrFail($id);
  
        return view('offres.edit', compact('offre'));
    }
  
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $offre = offre::findOrFail($id);
  
        $offre->update($request->all());
  
        return redirect()->route('Offres')->with('success', 'offre mis-à-jour avec succés');
    }
  
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $offre = offre::findOrFail($id);
  
        $offre->delete();
  
        return redirect()->route('Offres')->with('success', 'offre supprimé avec succés');
    }
}