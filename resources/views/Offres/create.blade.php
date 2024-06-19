@extends('layouts.app')
  
@section('title', 'Créer offre')
  
@section('contents')
    <h1 class="mb-0">Ajouter offre</h1>
    <hr />
    <form action="{{ route('Offres.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="titre" class="form-control" placeholder="titre">
            </div>
            <div class="col">
                <input type="text" name="description" class="form-control" placeholder="description">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="catégorie" class="form-control" placeholder="catégorie : stage / emploie?">
            </div>
            <div class="col">
                <input type="number" name="prix" class="form-control" placeholder="prix">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="responsabilité" class="form-control" placeholder="responsabilité">
            </div>
            <div class="col">
                <input type="text" name="location" class="form-control" placeholder="location">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <input type="date" name="datelim" class="form-control" placeholder="date limite">
            </div>
        </div>


 
        <div class="row">
            <div class="d-grid">
                <button type="submit" class="btn btn-primary">Soumettre</button>
            </div>
        </div>
    </form>
@endsection