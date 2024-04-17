@extends('layouts.app')

@section('title', 'Modifiica Personaggi')

@section('main-content')
<section>
    <div class="container py-4">

        <a href="{{route('admin.characters.index')}}" class="btn btn-primary my-3">Torna alla lista</a>



        <h1 class="my-3">Modifica Personaggio</h1>

        <form action="{{ route('admin.characters.update', $character) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="col-12 d-flex">
                <div class="col-6">
                    <label for="name" class="form-label">Nome: </label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name') ?? $character->name }}" />
                    @error('name')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror

                    <label for="strength" class="form-label">Forza: </label>
                    <input type="number" class="form-control @error('strength') is-invalid @enderror" id="attack" name="strength" value="{{ old('strength') ?? $character->strength }}" />
                    @error('strength')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror

                    <label for="defence" class="form-label">Difesa: </label>
                    <input type="number" class="form-control @error('defence') is-invalid @enderror" id="defence" name="defence" value="{{ old('defence') ?? $character->defence }}" />
                    @error('defence')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror

                    <label for="speed" class="form-label">Velocità: </label>
                    <input type="number" class="form-control @error('speed') is-invalid @enderror" id="speed" name="speed" value="{{ old('speed') ?? $character->speed }}" />
                    @error('speed')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror

                    <label for="intelligence" class="form-label">Intelligenza: </label>
                    <input type="number" class="form-control @error('intelligence') is-invalid @enderror" id="intelligence" name="intelligence" value="{{ old('intelligence') ?? $character->intelligence }}" />
                    @error('intelligence')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror

                    <label for="life" class="form-label">Vita: </label>
                    <input type="number" class="form-control @error('life') is-invalid @enderror" id="life" name="life" value="{{ old('life') ?? $character->life }}" />
                    @error('life')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror

                    <label for="description" class="form-label">Descrizione: </label>
                    <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description" rows="4">{{ old('description') ?? $character->description }}</textarea>
                    @error('description')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>



                <div class="col-6 ps-2">
                    <p class="my-2">Armi:</p>
                    <div class="d-flex flex-wrap @error('items') is-invalid @enderror">
                        @foreach($items as $item)
                        <div class="col-3 mb-1">
                            <label class="form-check-label" for=" item-{{$item->id}}">{{$item->name}}</label>
                            <input {{ in_array($item->id, old('items', $character_items_id ?? [])) ? 'checked' : '' }} class="form-check-input @error('items') is-invalid @enderror" type="checkbox" value="{{$item->id}}" id="item-{{$item->id}}" name="items[]">
                        </div>
                        @endforeach
                    </div>
                    @error('items')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
            </div>
            <button type="submit" class="btn btn-primary mt-2">Modifica</button>
        </form>



    </div>
</section>
@endsection
