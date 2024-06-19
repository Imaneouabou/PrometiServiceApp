@extends('layouts.app')
  
@section('title', 'Modifier Offre')
  
@section('contents')
    <h1 class="mb-0">Modifier Offre</h1>
    <hr />
    <form action="{{ route('Offres.update', $offre->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">titre</label>
                <input type="text" name="titre" class="form-control" placeholder="titre" value="{{ $offre->titre }}" >
            </div>
            <div class="col mb-3">
                <label class="form-label">description</label>
                <input type="text" name="description" class="form-control" placeholder="description" value="{{ $offre->description }}" >
            </div>
        </div>
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">catégorie</label>
                <input type="text" name="catégorie" class="form-control" placeholder="catégorie" value="{{ $offre->catégorie }}" >
            </div>
            <div class="col mb-3">
                <label class="form-label">prix</label>
                <input  type="number" class="form-control" name="prix" placeholder="Prix" >
            </div>
        </div>
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">responsabilité</label>
                <input type="text" name="responsabilité" class="form-control" placeholder="responsabilité" value="{{ $offre->responsabilité }}" >
            </div>
            <div class="col mb-3">
                <label class="form-label">location </label>
                <input type="text" name="location" class="form-control" placeholder="location" value="{{ $offre->location }}" >
            </div>
        </div>
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">date limite</label>
                <input type="date" name="datelim" class="form-control" placeholder="date limite" value="{{ \Carbon\Carbon::parse( $offre->datelim)->format('d-m-Y') }}" >
            </div>
           
        </div>
       
        
        
        <div class="row">
            <div class="d-grid">
                <button class="btn btn-warning">Modifier</button>
            </div>
        </div>
        
    </form>
@endsection