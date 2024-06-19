<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;

class ClientsiteController extends Controller
{
    public function index_site(){
        $client = Client::all();
        return view('Clientsite', ['client'=>$client]);
    }
}






 