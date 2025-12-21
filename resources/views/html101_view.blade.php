@extends('template.default')

@section('title', 'VIEW HTML')
@section('content')
<div class="container">
    <h3>RESUTL HTML</h3>
    <div><strong>ชื่อ:</strong> {{ $fname ?? '' }}</div>
    <div><strong>สกุล:</strong> {{ $lname ?? '' }}</div>
    <div><strong>วัน/เดือน/ปีเกิด:</strong> {{ $date ?? '' }}</div>
    <div><strong>อายุ:</strong> {{ $age ?? '' }}</div>
    <div><strong>เพศ:</strong> {{ $gender ?? '' }}</div>
    <div><strong>ที่อยู่:</strong> {{ $address ?? '' }}</div>
    <div><strong>สีที่ชอบ:</strong> {{ $color ?? '' }}</div>
    <div><strong>แนวเพลงที่ชอบ:</strong> {{ $preference ?? '' }}</div>
    <div><strong>ยินยอม:</strong> {{ isset($consent) && $consent ? 'ใช่' : 'ไม่' }}</div>
    @if(!empty($photo))
        <div><strong>รูป:</strong> <img src="{{ asset('storage/' . $photo) }}" alt="photo" style="max-width:200px"></div>
    @endif
</div>
@endsection
