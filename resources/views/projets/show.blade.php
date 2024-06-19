@extends('layouts.app')
  
@section('title', 'Show Projet')
  
@section('contents')
    <h1 class="mb-0">Detail Projet</h1>
    <hr />
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Titre</label>
            <input type="text" name="titre" class="form-control" placeholder="Titre" value="{{ $projet->titre }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Description</label>
            <input type="text" name="description" class="form-control" placeholder="Description" value="{{ $projet->description}}" readonly>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">image</label>
            <input type="file" name="image" class="form-control" placeholder="image" value="{{ $projet->image}}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Catégorie</label>
            <input type="text" name="catégorie" class="form-control" placeholder="catégorie" value="{{ $projet->catégorie}}" readonly>
        </div>
       
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Date</label>
            <input type="date" name="date" class="form-control" placeholder="Date" value="{{ $projet->date}}" readonly>
        </div>
    </div>
   
@endsection