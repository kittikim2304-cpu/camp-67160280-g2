@extends('template.default')

@section('title','my view')
@section('content')

<ul>
    @for ($i = 1; $i <= 12; $i++)
        <li>{{ $num }} x {{ $i }} = {{ $num * $i }}</li>
    @endfor
</ul>
@endsection
