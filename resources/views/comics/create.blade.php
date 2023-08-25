@extends('layouts.main')

@section('title', 'Create Comic')

@section('main')
    <div class="container">
        <form action="" method="POST" class="row mt-5">
            <div class="mb-3 col-6">
                <label for="title" class="form-label">Titolo</label>
                <input type="text" class="form-control" name="title" id="title" placeholder="Inserisci il titolo..."
                    required>
            </div>
            <div class="mb-3 col-6">
                <label for="type" class="form-label">Tipo</label>
                <input type="text" class="form-control" name="type" id="type" placeholder="Inserisci il tipo..."
                    required>
            </div>
            <div class="mb-3 col-6">
                <label for="series" class="form-label">Serie</label>
                <input type="text" class="form-control" name="series" id="series" placeholder="Inserisci le serie..."
                    required>
            </div>
            <div class="mb-3 col-3">
                <label for="price" class="form-label">Prezzo</label>
                <input type="text" class="form-control" name="price" id="price"
                    placeholder="Inserisci il prezzo..." required>
            </div>
            <div class="mb-3 col-6">
                <label for="thumb" class="form-label">Immagine</label>
                <input type="url" class="form-control" name="thumb" id="thumb"
                    placeholder="Inserisci l'url dell'immagine" required>
            </div>
            <div class="mb-3 col-3">
                <label for="sale_date" class="form-label">Sale Date</label>
                <input type="date" class="form-control" name="sale_date" id="sale_date" required>
            </div>
            <div class="mb-3 col-6">
                <label for="artists" class="form-label">Artits</label>
                <input type="text" class="form-control" name="artists" id="artists"
                    placeholder="Inserisci gli artisti " required>
            </div>
            <div class="mb-3 col-6">
                <label for="writers" class="form-label">Writers</label>
                <input type="text" class="form-control" name="writers" id="writers"
                    placeholder="Inserisci gli scrittori" required>
            </div>

            <div class="col-12 mb-3">
                <label for="description" class="form-label">Descrizione</label>
                <textarea class="form-control" name="description" id="description" rows="3"></textarea>
            </div>

            <div class="text-end">
                <button type="reset" class="btn btn-danger ">Reset</button>
                <button class="btn btn-success">Crea</button>
            </div>
        </form>
    </div>
@endsection
