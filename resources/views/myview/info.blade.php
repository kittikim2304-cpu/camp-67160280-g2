@extends('template.default')
@section('header' , 'ตารางแม่สูตรคูณ')
@section('content')
@section('title' , 'แม่สูตรสูตร')
    <form action="/calculate" method="post">
        @csrf
        <?php //echo isset($_GET['mynumber']) ? $_GET['ymnumber'] : ""; ?>
        <input class="form-control" type="number" name="mynumber">
        <br>
        <button class = "btn btn-sncess">บันทึก</button>
    </form>
@endsection
