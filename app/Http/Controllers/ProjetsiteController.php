<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjetsiteController extends Controller
{
   public function index_site(){
    return view('projetsite');
   }
}
