@extends('template.default')

@section('title', 'Pokedex List')
@section('content')
<div class="container">
    <h3>Pokedexs</h3>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <a href="{{ route('pokedexs.create') }}" class="btn btn-primary mb-2">Create New</a>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Type</th>
                <th>Species</th>
                <th>HP</th>
                <th>Attack</th>
                <th>Defense</th>
                <th>Image</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        @foreach($pokedexs as $p)
            <tr>
                <td>{{ $p->id }}</td>
                <td>{{ $p->name }}</td>
                <td>{{ $p->type }}</td>
                <td>{{ $p->species }}</td>
                <td>{{ $p->hp }}</td>
                <td>{{ $p->attack }}</td>
                <td>{{ $p->defense }}</td>
                <td>
                    @if($p->image_url)
                        @php
                            $img = $p->image_url;
                            if(\Illuminate\Support\Str::startsWith($img, ['http://', 'https://'])){
                                $src = $img;
                            } else {
                                $src = asset(ltrim($img, '/'));
                            }
                        @endphp
                        <img src="{{ $src }}" alt="img" style="max-width:80px">
                    @endif
                </td>
                <td>
                    <a href="{{ route('pokedexs.show', $p) }}" class="btn btn-sm btn-info">Show</a>
                    <a href="{{ route('pokedexs.edit', $p) }}" class="btn btn-sm btn-warning">Edit</a>
                    <form action="{{ route('pokedexs.destroy', $p) }}" method="POST" style="display:inline-block" onsubmit="return confirm('Delete?')">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-sm btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
@endsection
