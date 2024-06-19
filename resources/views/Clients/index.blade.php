@extends('layouts.app')
  

  
@section('contents')
    <div class="d-flex align-items-center justify-content-between">
        <h1 class="mb-0">Liste  des clients</h1>
        <a href="{{ route('clients.create') }}" class="btn btn-primary">Ajouter client</a>
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
                <th>image</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>+
            @if($client->count() > 0)
                @foreach($client as $rs)
                    <tr>
                        <td class="align-middle">{{ $loop->iteration }}</td>
                        <td class="align-middle">{{ $rs->titre }}</td>
                        <td class="align-middle">{{ $rs->image }}</td> 
                        <td class="align-middle">
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <a href="{{ route('clients.show', $rs->id) }}" type="button" class="btn btn-secondary">Détail</a>
                                <a href="{{ route('clients.edit', $rs->id)}}" type="button" class="btn btn-warning">Modifier</a>
                                <form action="{{ route('clients.destroy', $rs->id) }}" method="POST" type="button" class="btn btn-danger p-0" onsubmit="return confirm('Delete?')">
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
                    <td class="text-center" colspan="5">client non trouvé</td>
                </tr>
            @endif
        </tbody>
    </table>
@endsection