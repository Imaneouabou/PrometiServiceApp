<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Actu;
use App\Models\Projet;
use App\Models\Client;


class AcceuilsiteController extends Controller
{
    public function index_site(){
   

    $client = Client::all();
    $actualite = Actu::limit(3)->get();;
    $projet = Projet::limit(5)->get();;

    return view('Acceuilsite', ['client'=>$client ,'actualite'=>$actualite,'projet'=>$projet]);
    
}
}