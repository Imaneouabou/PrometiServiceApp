@extends('layouts.app')
  
@section('title', 'Create client')
  
@section('contents')
    <h1 class="mb-0">Ajouter client</h1>
    <hr />
    <form action="{{ route('clients.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="titre" class="form-control" placeholder="Titre">
            </div>
            <div class="col" style="display: flex">
                
                <input type="file" name="image" class="form-control" placeholder="image">
            </div>
        </div>
      
 
        <div class="row">
            <div class="d-grid">
                <button type="submit" class="btn btn-primary">Envoyer</button>
            </div>
        </div>
    </form>
@endsection