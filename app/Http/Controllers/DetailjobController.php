<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Offre;



class DetailjobController extends Controller
{

    public function detail($id){
        $offre = Offre::findOrFail($id);
  
        return view('Detailjob', compact('offre'));

    }
}

