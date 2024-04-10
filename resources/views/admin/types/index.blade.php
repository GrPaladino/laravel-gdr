@extends('layouts.app')

@section('title', 'Pagina iniziale')

@section('main-content')
<section>
    <div class="container py-4">

        <a href="{{route('admin.types.create')}}" class="btn btn-primary my-3">Inserisci nuovo personaggio</a>

        <table class="table">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Immagine</th>
                    {{-- <th>Descrizione</th> --}}
                    <th></th>

                </tr>
            </thead>
            <tbody>
                @forelse($types as $type)
                <tr>
                    <td>{{ $type->name }}</td>
                    <td>{{ $type->img }}</td>
                    {{-- <td>{{ $type->description }}</td> --}}
                    <td>
                        <a href="{{ route('admin.types.show', $type) }}"><i class="fa-solid fa-eye me-2"></i></a>

                        <a href="{{ route('admin.types.edit', $type) }}"><i class="fa-solid fa-pencil me-2"></i></a>

                        <button type="button" class="btn btn-link text-danger p-0" data-bs-toggle="modal" data-bs-target="#type-{{$type->id}}">
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

@foreach($types as $type)

<!-- Modal -->
<div class="modal fade" id="type-{{$type->id}}" tabindex="-1" aria-labelledby="type-{{$type->id}}" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Eliminare {{$type->name}}?</h1>
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

@endforeach

@endsection


@section ('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
@endsection