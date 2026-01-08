@extends('template.default')

@section('title', 'Edit Pokedex')
@section('content')
<div class="container">
    <h3>Edit Pokedex</h3>

    <form action="{{ route('pokedexs.update', $pokedex) }}" method="POST">
        @method('PUT')
        @include('pokedexs._form')
    </form>
</div>
@endsection
