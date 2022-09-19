<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel Model Controller</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}" type="text/css">
</head>

<body>

    <section>
        <div class="d-flex flex-wrap">
            @forelse($movies as $movie)
                <div class="container py-5">
                    <div class="row">
                        <div class="card">
                            <h3>{{ $movie->title }}</h3>
                            <h5>Titolo originale: {{ $movie->original_title }}</h5>
                            <h5>Nazionalità: {{ $movie->nationality }}</h5>
                            <h5>Data uscita: {{ $movie->date }}</h5>
                            <h5>Voto: {{ $movie->vote }}</h5>
                        </div>
                    @empty
            @endforelse
        </div>
        </div>
        </div>
    </section>
