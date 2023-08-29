@extends('layouts.main')

@section('title', $comic['title'])

@section('main')
    <section id="single-comic">
        <div class="bg-blue d-flex justify-content-end align-items-center">
            <a href="{{ url("comics/$comic->id/edit") }}" class="btn btn-warning">Modifica</a>

            <form class="destroy-form d-inline mx-3" method="POST" action="{{ route('comics.destroy', $comic->id) }}"
                data-title="{{ $comic->title }}">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger ">Elimina</button>
            </form>
        </div>

        {{-- # Immagine copertina --}}
        <div class="img-container">
            <p>{{ $comic['type'] }}</p>
            <img src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}">
            <a href="/comics">View Gallery</a>
        </div>


        <div class="container">

            {{-- # Wrap generico --}}
            <div class="wrap">

                {{-- # Descrizione comic --}}
                <div>

                    <h1>{{ $comic['title'] }}</h1>
                    <div class="info">
                        <div class="cost">
                            <p class="price">U.S Price: <span>{{ $comic['price'] }}</span></p>
                            <p class="available">AVAILABLE</p>
                        </div>
                        <div class="check">
                            <label for="check">Check Availability</label>
                            <select name="check" id="check-select">
                                <option value=""></option>
                                <option value="">available</option>
                                <option value="">not available</option>
                            </select>
                        </div>
                    </div>
                    <p>{{ $comic['description'] }}</p>
                </div>

            </div>

            <div class="other-info">
                <div class="left side">
                    <h3>Talent</h3>
                    <div>
                        <p>Art by:</p>
                        <div>
                            <a href="#">{{ $comic['artists'] }}</a>
                        </div>
                    </div>
                    <div>
                        <p>Written by:</p>
                        <div>
                            <a href="#">{{ $comic['writers'] }}</a>
                        </div>
                    </div>
                </div>

                <div class="right side">
                    <h3>Specs</h3>
                    <div>
                        <p>Series:</p>
                        <a href="#">{{ $comic['type'] }}</a>

                    </div>
                    <div>
                        <p>U.S. Price:</p>
                        <span>{{ $comic['price'] }}</span>
                    </div>
                    <div>
                        <p>On Sale Date:</p>
                        <span>{{ $comic['sale_date'] }}</span>
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection


@section('script')
    @vite('resources/js/destroy-form.js')
@endsection
