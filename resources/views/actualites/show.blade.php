
@extends('layouts.app')
  
@section('title', 'Show actualite')
  
@section('contents')
    <h1 class="mb-0">Detail actualité</h1>
    <hr />
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Titre</label>
            <input type="text" name="titre" class="form-control" placeholder="Titre" value="{{ $actualite->titre }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Description</label>
            <input type="text" name="Description" class="form-control" placeholder="Description" value="{{ $actualite->description}}" readonly>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">image</label>
            <input type="file" name="image" class="form-control" placeholder="image" value="{{ $actualite->image}}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Date d'actualité</label>
            <input type="date" class="form-control"   name="date_creation" placeholder="Date d'actualité" value="{{ \Carbon\Carbon::parse($actualite->date_creation)->format('d-m-Y') }}" readonly>
        </div>
    </div>
   
@endsection