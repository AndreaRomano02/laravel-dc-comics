@extends('layouts.main')

@section('main')
    <div class="text-end">
        <a href="{{ route('comics.create') }}" class="btn btn-primary m-3 p-3">Crea un comic</a>
    </div>

    <section class="container py-5">

        <div class="row row-cols-4 gap-5">
            @if ($comics)
                @foreach ($comics as $comic)
                    <div class="card col" style="width: 18rem;">
                        <img src="{{ $comic->thumb }}" class="card-img-top" alt="{{ $comic->title }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $comic->title }}</h5>
                            <p><strong>Price: </strong>{{ $comic->price }}</p>
                            <p><strong>Sale Date: </strong>{{ $comic->sale_date }}</p>
                            <p><strong>Series: </strong>{{ $comic->series }}</p>
                            <p><strong>Type: </strong>{{ $comic->type }}</p>
                            <p><strong>Series: </strong>{{ $comic->series }}</p>
                            <p><strong>Artists: </strong>{{ $comic->artists }}</p>
                            <p><strong>Writers: </strong>{{ $comic->writers }}</p>
                            <p class="card-text"> <strong>Description: </strong>{{ $comic->getAbstract() }}</p>

                            <a href="{{ url("comics/$comic->id") }}" class="btn btn-outline-info">Info</a>
                            <a href="{{ url("comics/$comic->id/edit") }}" class="btn btn-outline-warning">Modifica</a>
                            <form class="d-inline" method="POST" action="{{ route('comics.destroy', $comic->id) }}">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-outline-danger ">Elimina</button>
                            </form>
                        </div>
                    </div>
                @endforeach
            @else
                <div class="col-12 text-center ">
                    <h1>NON CI SONO CONTENUTI</h1>
                </div>
            @endif
        </div>
    </section>
@endsection
