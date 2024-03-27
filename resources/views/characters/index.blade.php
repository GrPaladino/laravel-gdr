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
                <th>sdfsdf</th>
                <th></th>
                <th></th>
                <th></th>
              </tr>
            </thead>
            <tbody>
              @forelse($characters as $character)
                  <tr>
                    {{-- <td>{{ $train->id }}</td> --}}
                    <td>{{ $character->name }}</td>
                    <td>{{ $character->description }}</td>
                    <td><a href="{{ route('characters.show') }}"><i class="fa-solid fa-eye"></i></a></td>
                    {{-- <td></td>
                    <td></td>
                    <td></td> --}}
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

@section ('CSS')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
@endsection