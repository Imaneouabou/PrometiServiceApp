<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Actu;

class ActualitesiteController extends Controller
{


 public function index_site(){

   $actualite = Actu::orderBy('date_creation')->get();
   return view('Actualitesite', ['actualite'=>$actualite]);
   
}

       
public function detail($id)
  {

   $actualite = Actu::find($id);

   $otherActualites = Actu::where('id', '!=', $id)->limit(4)->get();


   return view('Actualiteune', compact('actualite','otherActualites'));
   }

}
