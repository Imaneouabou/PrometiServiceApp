@extends('layouts.app')
  
@section('title', 'Modifier  actualite')
  
@section('contents')
    <h1 class="mb-0">Modifier actualite</h1>
    <hr />
    <form action="{{ route('actualites.update', $actualite->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Titre</label>
                <input type="text" name="titre" class="form-control" placeholder="Titre" value="{{ $actualite->titre}}" >
            </div>
            <div class="col mb-3">
                <label class="form-label">Description</label>
                <input type="text" name="Description" class="form-control" placeholder="Description" value="{{ $actualite->description }}" >
            </div>
        </div>
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Image</label>
                <input type="file" name="image" class="form-control" placeholder="image" value="{{ $actualite->image }}">
            </div>
            <div class="col mb-3">
                <label class="form-label">Date d'actualité</label>
                <input type="date" name="date_creation" class="form-control" placeholder="Date d'actualité" value="{{ \Carbon\Carbon::parse($actualite->date_creation)->format('d-m-Y') }}">
            </div>
            
        </div>
        <div class="row">
            <div class="d-grid">

                <button class="btn btn-warning">Modifier</button>

            </div>
        </div>
        
    </form>
@endsection