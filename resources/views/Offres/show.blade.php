@extends('layouts.app')
  
@section('title', 'Show offre')
  
@section('contents')
    <h1 class="mb-0">Detail offre</h1>
    <hr />
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">titre</label>
            <input type="text" name="titre" class="form-control" placeholder="titre" value="{{ $offre->titre }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">description</label>
            <input type="text" name="description" class="form-control" placeholder="description" value="{{ $offre->description }}" readonly>
        </div>
    </div>
    <div class="row">

        <div class="col mb-3">
            <label class="form-label">catégorie</label>
            <input type="text" name="catégorie" class="form-control" placeholder="catégorie" value="{{ $offre->catégorie }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">prix</label>
            <input type="number" name="prix" class="form-control" placeholder="prix" value="{{ $offre->prix }}" readonly>
        </div>
    </div>

    <div class="row">

        <div class="col mb-3">
            <label class="form-label">responsabilité</label>
            <input type="text" name="responsabilité" class="form-control" placeholder="responsabilité" value="{{ $offre->responsabilité }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">date limite</label>
            <textarea type="date" name="datelim" class="form-control" placeholder="date limite" value="{{ \Carbon\Carbon::parse( $offre->datelim)->format('d-m-Y') }}" readonly></textarea>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">location</label>
            <input type="text" name="location" class="form-control" placeholder="location" value="{{ $offre->location }}" readonly>
        </div>
        
    </div>
@endsection















































@extends('layouts.app')
  
@section('title', 'Voir Offre')
  
@section('contents')
    <h1 class="mb-0">Detail Offre</h1>
    <hr />
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Titre</label>
            <input type="text" name="titre" class="form-control" placeholder="Titre" value="{{ $offre->titre }}" >
        </div>
        <div class="col mb-3">
            <label class="form-label">Description</label>
            <input type="text" name="Description" class="form-control" placeholder="Description" value="{{ $offre->description}}" readonly>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Catégorie</label>
            <input type="mediumText" name="catégorie" class="form-control" placeholder="catégorie" value="{{ $offre->catégorie}}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Prix</label>
            <input type="text" name="prix" class="form-control" placeholder="prix" value="{{ $offre->prix}}" readonly>
        </div>
       
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">location</label>
            <input type="mediumText" name="location" class="form-control" placeholder="location" value="{{ $offre->location}}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">responsabilité</label>
            <input type="mediumText" name="responsabilité" class="form-control" placeholder="responsabilité" value="{{ $offre->responsabilité}}" readonly>
        </div>
       
    </div>
   
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Date limite</label>
            <input type="Date" name="location" class="form-control" placeholder="Date limite" value="{{ $offre->datelim}}" readonly>
        </div>
       
    </div>
   
@endsection