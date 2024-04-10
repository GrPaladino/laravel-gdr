@extends('layouts.app')

@section('title', 'Pagina iniziale')

@section('main-content')
<section>
    <div class="container py-4">

        <a href="{{route('admin.types.index')}}" class="btn btn-primary my-3">Torna alla lista</a>

        <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#type-{{$type->id}}">
            Elimina
        </button>



        <h1 class="my-3">Aggiungi nuovo Tipo di personaggio</h1>
        <form action="{{ route('admin.types.update', $type) }}" method="POST">
            @csrf
            @method('PUT')

            <label for="name" class="form-label">Nome: </label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $type->name }}" />

            <label for="img" class="form-label">Linka l'immagine: </label>
            <input type="numb" class="form-control" id="img" name="img" value="{{ $type->img }}" />

            <label for="description" class="form-label">Descrizione: </label>
            <textarea class="form-control" id="description" name="description" rows="4">{{ $type->description }}</textarea>

            <button type="submit" class="btn btn-primary mt-2">Modifica</button>
        </form>

    </div>
</section>
@endsection