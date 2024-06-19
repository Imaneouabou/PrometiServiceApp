@extends('layouts.app')
  
@section('title', 'Edit client')
  
@section('contents')
    <h1 class="mb-0">Modifier client</h1>
    <hr />
    <form action="{{ route('clients.update', $client->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Titre</label>
                <input type="text" name="titre" class="form-control" placeholder="Titre" value="{{ $client->titre}}" >
            </div>
            <div class="col mb-3">
                <label class="form-label">Image</label>
                <input type="file" name="image" class="form-control" placeholder="image" value="{{ $client->image }}" >
            </div>
        </div>
        
        <div class="row">
            <div class="d-grid">
                <button class="btn btn-warning">Modifier</button>
            </div>
        </div>
    </form>
@endsection