@extends('layouts.app')

@section('title', 'Pagina iniziale')

@section('main-content')
  <section>
    <div class="container py-4">
        <table class="table">
            <thead>
              <tr>
                {{-- <th>ID</th> --}}
                <th>Nome</th>
                <th>Descrizione</th>
                <th>Attacco</th>
                <th>Difesa</th>
                <th>Velocità</th>
                <th>Vita</th>
              </tr>
            </thead>
            <tbody>
              @forelse($characters as $character)
                  <tr>
                    {{-- <td>{{ $train->id }}</td> --}}
                    <td>{{ $character->name }}</td>
                    <td>{{ $character->description }}</td>
                    <td>{{ $character->attack }}</td>
                    <td>{{ $character->defence }}</td>
                    <td>{{ $character->speed }}</td>
                    <td>{{ $character->life }}</td>
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