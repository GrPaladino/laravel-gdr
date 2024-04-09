@extends('layouts.app')

@section('title', 'Pagina iniziale')

@section('main-content')
<section>
    <div class="container py-4">

        <a href="{{route('admin.characters.create')}}" class="btn btn-primary my-3">Inserisci nuovo personaggio</a>

        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Descrizione</th>
                    <th></th>

                </tr>
            </thead>
            <tbody>
                @forelse($characters as $character)
                <tr>
                    <td>{{ $character->id }}</td>
                    <td>{{ $character->name }}</td>
                    <td>{{ $character->description }}</td>
                    <td>
                        <a href="{{ route('admin.characters.show', $character) }}"><i class="fa-solid fa-eye me-2"></i></a>

                        <a href="{{ route('admin.characters.edit', $character) }}"><i class="fa-solid fa-pencil me-2"></i></a>

                        <button type="button" class="btn btn-link text-danger p-0" data-bs-toggle="modal" data-bs-target="#character-{{$character->id}}">
                            <i class="fa-solid fa-trash text-danger pb-2"></i>
                        </button>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="100%">Nessun risultato trovato</td>
                </tr>
                @endforelse
            </tbody>
        </table>

        {{-- {{ $items->links() }} --}}
    </div>
</section>
@endsection


@section('modal')

@foreach($characters as $character)

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

@endforeach

@endsection


@section ('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
@endsection
