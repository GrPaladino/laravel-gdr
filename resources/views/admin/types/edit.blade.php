@extends('layouts.app')

@section('title', 'Modifica')

@section('main-content')
<section>
    <div class="container py-4">

        <a href="{{route('admin.types.index')}}" class="btn btn-primary my-3">Torna alla lista</a>

        <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#type-{{$type->id}}">
            Elimina
        </button>



        <h1 class="my-3">Modifica la Tipologia del personaggio</h1>
        <form action="{{ route('admin.types.update', $type) }}" method="POST">
            @csrf
            @method('PUT')

            <label for="name" class="form-label">Nome: </label>
            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ $type->name }}" />
            @error('name')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror

            <label for="img" class="form-label">Link immagine: </label>
            <input type="link" class="form-control @error('img') is-invalid @enderror" id="img" name="img" value="{{ $type->img }}" />
            @error('img')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror

            <label for="description" class="form-label">Descrizione: </label>
            <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description" rows="4">{{ $type->description }}</textarea>
            @error('description')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror

            <button type="submit" class="btn btn-primary mt-2">Modifica</button>
        </form>

    </div>
</section>
@endsection
