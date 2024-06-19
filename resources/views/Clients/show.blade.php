@extends('layouts.app')
  
@section('title', 'Show client')
  
@section('contents')
    <h1 class="mb-0">Détail client</h1>
    <hr />
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Titre</label>
            <input type="text" name="titre" class="form-control" placeholder="Titre" value="{{ $client->titre}}" readonly>
        </div>
        <div class="col mb-3"> 
            <input type="file" name="image" class="form-control" placeholder="image" value="{{ $client->image }}" readonly>
        </div>
    </div>
    
    
@endsection