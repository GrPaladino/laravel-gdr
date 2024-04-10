@extends('layouts.app')

@section('title', 'Pagina creazione')

@section('main-content')
<section>
    <div class="container py-4">



        <a href="{{route('admin.types.index')}}" class="btn btn-primary my-3">Torna alla lista</a>


        <h1 class="my-3">Aggiungi una nuova Tipologia</h1>
        <form action="{{ route('admin.types.store') }}" method="POST">
            @csrf

            <label for="name" class="form-label">Nome: </label>
            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" />
            @error('name')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror

            <label for="img" class="form-label">Link immagine: </label>
            <input type="numb" class="form-control @error('img') is-invalid @enderror" id="img" name="img" />
            @error('img')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror

            <label for="description" class="form-label">Descrizione: </label>
            <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description" rows="4"></textarea>
            @error('description')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror

            <button type="submit" class="btn btn-primary mt-2">Salva</button>
        </form>

    </div>
</section>
@endsection
