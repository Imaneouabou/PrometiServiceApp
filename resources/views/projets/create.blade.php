@extends('layouts.app')
  
@section('title', 'Créer Projet')
  
@section('contents')
    <h1 class="mb-0">Ajouter  Projet</h1>
    <hr />
    <form action="{{ route('projets.store') }}" method="POST" enctype="multipart/form-data">
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
            <div class="col">
                <input type="text" name="catégorie" class="form-control" placeholder="Catégorie">    
            </div>
            <div class="col"  >      
                <input type="file" name="image" class="form-control" placeholder="Choisir une image">
            </div>
            
        </div>
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="nomclient" class="form-control" placeholder="Nom Client">    
            </div>
            <div class="col">
                <input type="text" name="typeprojet" class="form-control" placeholder="Type du projet : En cours/ réalisé?">    
            </div>     
        </div>

        <div class="row mb-3">
            <div class="col">
                <input type="date" name="date" class="form-control" placeholder="Date">    
            </div>
        </div>


 
        <div class="row">
            <div class="d-grid">
                <button type="submit" class="btn btn-primary">Envoyer</button>
            </div>
        </div>
    </form>
@endsection