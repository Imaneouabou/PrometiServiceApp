@extends('layouts.app')
  
@section('title', 'Modifier projet')
  
@section('contents')
    <h1 class="mb-0">Modifier projet</h1>
    <hr />
    <form action="{{ route('projets.update', $projet->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Titre</label>
                <input type="text" name="titre" class="form-control" placeholder="Titre" value="{{ $projet->titre }}" >
            </div>
            <div class="col mb-3">
                <label class="form-label">description</label>
                <input type="text" name="description" class="form-control" placeholder="description" value="{{ $projet->description }}" >
            </div>
        </div>
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">image</label>
                <input type="file" name="image" class="form-control" placeholder="image" value="{{ $projet->image }}" >
            </div>
            <div class="col mb-3">
                <label class="form-label">catégorie</label>
                <input type="text" name="catégorie" class="form-control" placeholder="catégorie" value="{{ $projet->catégorie }}" >
            </div>
        </div>

        <div class="row">    
            <div class="col mb-3">
                <label class="form-label">Nom Client</label>
                <input type="text" name="nomclient" class="form-control" placeholder="nomclient" value="{{ $projet->nomclient }}" >
            </div>
            <div class="col mb-3">
                <label class="form-label">Type Projet</label>
                <input type="text" name="typeprojet" class="form-control" placeholder="Type du projet" value="{{ $projet->typeprojet}}" >
            </div>
        </div>

        <div class="row">    
            <div class="col mb-3">
                <label class="form-label">Date</label>
                <input type="date" name="date" class="form-control" placeholder="Date" value="{{ \Carbon\Carbon::parse($projet->date)->format('d-m-Y') }}">
            </div>
        </div>


        
        <div class="row">
            <div class="d-grid">
                <button class="btn btn-warning">Modifier</button>
            </div>
        </div>
    </form>
@endsection