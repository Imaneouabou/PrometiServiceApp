@extends('layouts.app')
  
@section('contents')
    <div class="d-flex align-items-center justify-content-between">
        <h1 class="mb-0">Liste des Offres</h1>
        <a href="{{ route('Offres.create') }}" class="btn btn-primary">Ajouter Offre</a>
    </div>
    <hr />
    @if(Session::has('success'))
        <div class="alert alert-success" role="alert">
            {{ Session::get('success') }}
        </div>
    @endif
    <table class="table table-hover">
        <thead class="table-primary">
            <tr>
                <th>#</th>
                <th>Titre</th>
                <th>Description</th>
                <th>Catégorie</th>
                <th>Prix</th>
                <th>location</th>
                <th>Responsabilité</th>
                <th>Date limite</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>+
            @if($offre->count() > 0)
                @foreach($offre as $rs)
                    <tr>
                        <td class="align-middle">{{ $loop->iteration }}</td>
                        <td class="align-middle">{{ $rs->titre}}</td>
                        <td class="align-middle">{{ $rs->description}}</td>
                        <td class="align-middle">{{ $rs->catégorie }}</td>
                        <td class="align-middle">{{ $rs->prix}}</td>
                        <td class="align-middle">{{ $rs->location}}</td>
                        <td class="align-middle">{{ $rs->responsabilité}}</td>
                        <td class="align-middle">{{ \Carbon\Carbon::parse( $rs->datelim)->format('d-m-Y') }}</td>
                        

                       
                        <td class="align-middle">
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <a href="{{ route('Offres.show', $rs->id) }}" type="button" class="btn btn-secondary">Détail</a>
                                <a href="{{ route('Offres.edit', $rs->id)}}" type="button" class="btn btn-warning">modifier</a>
                                <form action="{{ route('Offres.destroy', $rs->id) }}" method="POST" type="button" class="btn btn-danger p-0" onsubmit="return confirm('Delete?')">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger m-0">Supprimer</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            @else
                <tr>
                    <td class="text-center" colspan="5">Offre non trouvé</td>
                </tr>
            @endif
        </tbody>
    </table>
@endsection