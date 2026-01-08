@extends('template.default')

@section('title', 'Pokedex Detail')
@section('content')
<div class="container">
    <h3>{{ $pokedex->name }}</h3>

    <div><strong>Type:</strong> {{ $pokedex->type }}</div>
    <div><strong>Species:</strong> {{ $pokedex->species }}</div>
    <div><strong>Height:</strong> {{ $pokedex->height }}</div>
    <div><strong>Weight:</strong> {{ $pokedex->weight }}</div>
    <div><strong>HP:</strong> {{ $pokedex->hp }}</div>
    <div><strong>Attack:</strong> {{ $pokedex->attack }}</div>
    <div><strong>Defense:</strong> {{ $pokedex->defense }}</div>
    @if($pokedex->image_url)
        @php
            $img = $pokedex->image_url;
            if(\Illuminate\Support\Str::startsWith($img, ['http://', 'https://'])){
                $src = $img;
            } else {
                $src = asset(ltrim($img, '/'));
            }
        @endphp
        <div><img src="{{ $src }}" style="max-width:300px"></div>
    @endif

    <a href="{{ route('pokedexs.index') }}" class="btn btn-secondary mt-2">Back</a>
</div>
@endsection
