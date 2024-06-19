<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Projet;

class ProjetsréalisésController extends Controller

    {
        public function index_site(){
    
            $projet = Projet::all();
            return view('Projetsréalisés', ['projet'=>$projet]);
            
        }
    
                
        public function detail($id)
           {

            $projet = Projet::find($id);
            $otherProjets = Projet::where('id', '!=', $id)->limit(7)->get();
        
            return view('Projetsingle', compact('projet','otherProjets'));
            
            }
    
    }
    

