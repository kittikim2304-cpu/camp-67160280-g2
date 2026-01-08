@extends('template.default')

@section('title', 'Create Pokedex')
@section('content')
<div class="container">
    <h3>Create Pokedex</h3>

    <form action="{{ route('pokedexs.store') }}" method="POST">
        @include('pokedexs._form')
    </form>
</div>
@endsection
