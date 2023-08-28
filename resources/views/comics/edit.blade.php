@extends('layouts.main')

@section('title', 'Edit Comic')

@section('main')
    <div class="container">

        {{-- #Allert per gli errori --}}
        @if ($errors->any())
            <div class="alert alert-danger mt-3">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('comics.update', $comic) }}" method="POST" class="row mt-5" novalidate>
            @csrf
            @method('PUT')


            <div class="mb-3 col-6">
                <label for="title" class="form-label">Titolo</label>
                <input type="text" class="form-control" name="title" id="title" value="{{ $comic->title }}" required>
            </div>
            <div class="mb-3 col-6">
                <label for="type" class="form-label">Tipo</label>
                <input type="text" class="form-control" name="type" id="type" value="{{ $comic->type }}"
                    required>
            </div>
            <div class="mb-3 col-6">
                <label for="series" class="form-label">Serie</label>
                <input type="text" class="form-control" name="series" id="series" value="{{ $comic->series }}"
                    required>
            </div>
            <div class="mb-3 col-3">
                <label for="price" class="form-label">Prezzo</label>
                <input type="text" class="form-control" name="price" id="price" value="{{ $comic->price }}"
                    required>
            </div>
            <div class="mb-3 col-6">
                <label for="thumb" class="form-label">Immagine</label>
                <input type="url" class="form-control" name="thumb" id="thumb" value="{{ $comic->thumb }}"
                    required>
            </div>
            <div class="mb-3 col-3">
                <label for="sale_date" class="form-label">Sale Date</label>
                <input type="date" class="form-control" name="sale_date" id="sale_date" value="{{ $comic->sale_date }}"
                    required>
            </div>
            <div class="mb-3 col-6">
                <label for="artists" class="form-label">Artits</label>
                <input type="text" class="form-control" name="artists" id="artists" value="{{ $comic->artists }}"
                    required>
            </div>
            <div class="mb-3 col-6">
                <label for="writers" class="form-label">Writers</label>
                <input type="text" class="form-control" name="writers" id="writers" value="{{ $comic->writers }}"
                    required>
            </div>

            <div class="col-12 mb-3">
                <label for="description" class="form-label">Descrizione</label>
                <textarea class="form-control" name="description" id="description" rows="5">{{ $comic->description }}</textarea>
            </div>

            <div class="text-end">
                <button type="reset" class="btn btn-danger ">Reset</button>
                <button class="btn btn-success">Modifica</button>
            </div>
        </form>
    </div>
@endsection
