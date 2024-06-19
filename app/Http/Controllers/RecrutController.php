<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Offre;

class RecrutController extends Controller
{
    public function index_site(){
        $Offre = Offre::orderBy('datelim')->get();
  
        return view('Recrut', compact('Offre'));
    }
    public function detail($id){

        $offre= offre::find($id);
        
        return view('Detailjob',compact('offre'));
    }
}
