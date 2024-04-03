@extends('layouts.app')

@section('title', 'Pagina iniziale')

@section('main-content')
<div class="container mt-4">

    <a href="{{route('admin.characters.index')}}" class="btn btn-primary my-3">Torna alla lista</a>
    <a href="{{route('admin.characters.edit', $character)}}" class="btn btn-primary my-3">Modifica</a>
    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#character-{{$character->id}}">
        Elimina
    </button>




    <div class="card text-center" style="width: 100%;">
        <div class="card-body">
            <h2 class="card-title">{{ $character->name }}</h2>
            <p class="card-text">{{ $character->description }}</p>
            <span><strong>Attacco: </strong> {{ $character->attack }}</span><br>
            <span><strong>Difesa: </strong> {{ $character->defence }}</span><br>
            <span><strong>Velocità: </strong>{{ $character->speed }}</span><br>
            <span><strong>Vita: </strong>{{ $character->life }}</span><br>
        </div>
    </div>
</div>
@endsection


@section('modal')



<!-- Modal -->
<div class="modal fade" id="character-{{$character->id}}" tabindex="-1" aria-labelledby="character-{{$character->id}}" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Eliminare {{$character->title}}?</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                L'azione é irreversibile.
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annulla</button>
                <form action="{{route('admin.characters.destroy', $character)}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger">Elimina</button>
                </form>

            </div>
        </div>
    </div>
</div>



@endsection
