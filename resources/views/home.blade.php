@extends('layouts.app')

@section('title', 'Pagina iniziale')

@section('main-content')
<section>
    <div class="container py-4">
        <table class="table">
            <thead>
                <tr>
                    {{-- <th>ID</th> --}}
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Slug</th>
                    <th>Categoria</th>
                    <th>Tipo</th>
                    <th>Peso</th>
                    <th>Costo</th>
                </tr>
            </thead>
            <tbody>
                @forelse($items as $item)
                <tr>
                    {{-- <td>{{ $train->id }}</td> --}}
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->slug }}</td>
                    <td>{{ $item->category }}</td>
                    <td>{{ $item->type }}</td>
                    <td>{{ $item->weight }}</td>
                    <td>{{ $item->cost }}</td>
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
