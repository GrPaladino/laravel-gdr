@extends('layouts.app')

@section('title', 'Pagina iniziale')

@section('main-content')
    <div class="container mt-4">
        <div class="card text-center" style="width: 100%;">
            <div class="card-body">
                <h2 class="card-title">{{ $character->name }}</h2>
                <p class="card-text">{{ $character->description }}</p>
                <span><strong>Attacco: </strong> {{ $character->attack }}</span><br>
                <span><strong>Difesa: </strong> {{ $character->defence }}</span><br>
                <span><strong>Velocità: </strong>{{ $character->speed }}</span><br>
                <span><strong>HP: </strong>{{ $character->life }}</span><br>
            </div>
        </div>
    </div>
@endsection