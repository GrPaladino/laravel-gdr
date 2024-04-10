@extends('layouts.app')

@section('title', 'Pagina iniziale')

@section('main-content')
<div class="container mt-4">

    <a href="{{route('admin.types.index')}}" class="btn btn-primary my-3">Torna alla lista</a>
    <a href="{{route('admin.types.edit', $type)}}" class="btn btn-primary my-3">Modifica</a>
    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#type-{{$type->id}}">
        Elimina
    </button>




    <div class="card text-center" style="width: 100%;">
        <img src="{{ $type->img }}" class="card-img-top" alt="immagine">
        <div class="card-body">
            <h2 class="card-title">{{ $type->name }}</h2>
            <p class="card-text">{{ $type->description }}</p>
        </div>
    </div>
</div>
@endsection


@section('modal')



<!-- Modal -->
<div class="modal fade" id="type-{{$type->id}}" tabindex="-1" aria-labelledby="type-{{$type->id}}" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Eliminare {{$type->title}}?</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                L'azione é irreversibile.
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annulla</button>
                <form action="{{route('admin.types.destroy', $type)}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger">Elimina</button>
                </form>

            </div>
        </div>
    </div>
</div>



@endsection