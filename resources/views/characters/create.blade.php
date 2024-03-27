@extends('layouts.app')

@section('title', 'Pagina iniziale')

@section('main-content')
  <section>
    <div class="container py-4">
        <h1>Aggiungi nuovo Personaggio</h1>
      <form action="{{ route('characters.store') }}" method="POST">
        @csrf

        <label for="name" class="form-label">Nome: </label>
        <input type="text" class="form-control" id="name" name="name" />

        <label for="attack" class="form-label">Attacco: </label>
        <input type="numb" class="form-control" id="attack" name="attack" />

        <label for="defence" class="form-label">Difesa: </label>
        <input type="numb" class="form-control" id="defence" name="defence" />

        <label for="speed" class="form-label">Velocità: </label>
        <input type="numb" class="form-control" id="speed" name="speed" />

        <label for="life" class="form-label">Vita: </label>
        <input type="numb" class="form-control" id="life" name="life" />

        <label for="description" class="form-label">Descrizione: </label>
        <textarea
            class="form-control"
            id="description"
            name="description"
            rows="4"
        ></textarea>

        <button type="submit" class="btn btn-primary mt-2">Crea</button>
    </form>

    </div>
  </section>
@endsection


@section('modal')



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
                <form action="{{route('characters.destroy', $character)}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger">Elimina</button>
                </form>

            </div>
        </div>
    </div>
</div>



@endsection