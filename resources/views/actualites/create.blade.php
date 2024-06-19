@extends('layouts.app')
  
@section('title', 'Créer actualite')
  
@section('contents')
    <h1 class="mb-0">Ajouter  actualité</h1>
    <hr />
    <form action="{{ route('actualites.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="titre" class="form-control" placeholder="Titre">
            </div>
            <div class="col">
                <input type="text" name="description" class="form-control" placeholder="Description">
            </div>
        </div>

        <div class="row mb-3">
            <div class="col"  >      
                <input type="file" value="Ajouter" class="form-control" name="image" placeholder="Choisir une image">
            </div>
           
            <div class="col">
                <input type="date" name="date_creation" class="form-control" placeholder="Date d'actualité">
            </div>
        </div>
 
        <div class="row">
            <div class="d-grid">
                <button type="submit" class="btn btn-primary">Envoyer</button>
            </div>
        </div>
    </form>
@endsection