@extends('template.default')

@section('title', 'Workshop FORM')
@section('header', 'Workshop #HTML - FORM')

@section('content')
<form method="POST" action="{{ route('html101.store') }}" enctype="multipart/form-data">
@csrf

<!-- ชื่อ -->
<div class="form-section">
    <label>ชื่อ</label>
    <input id="fname" name="fname" class="form-control">
    <div class="invalid-feedback">โปรดระบุชื่อ</div>
</div>

<!-- สกุล -->
<div class="form-section">
    <label>สกุล</label>
    <input id="lname" name="lname" class="form-control">
    <div class="invalid-feedback">โปรดระบุนามสกุล</div>
</div>

<!-- วันเดือนปีเกิด -->
<div class="form-section">
    <label>วัน/เดือน/ปีเกิด</label>
    <input type="date" id="date" name="date" class="form-control">
    <div class="invalid-feedback">โปรดระบุวันเกิด</div>
</div>

<!-- อายุ -->
<div class="form-section">
    <label>อายุ</label>
    <input type="number" id="age" name="age" class="form-control">
    <div class="invalid-feedback">โปรดระบุอายุ</div>
</div>

<!-- เพศ -->
<div class="form-section">
    <label>เพศ</label><br>
    <input type="radio" id="male" name="gender" value="ชาย"> ชาย
    <input type="radio" id="female" name="gender" value="หญิง"> หญิง
    <div class="invalid-feedback d-none" id="gender-error">โปรดระบุเพศ</div>
</div>

<!-- รูป -->
<div class="form-section">
    <label>รูป</label>
    <input type="file" id="photo" name="photo" class="form-control">
    <div class="invalid-feedback">โปรดเลือกรูป</div>
</div>

<!-- ที่อยู่ -->
<div class="form-section">
    <label>ที่อยู่</label>
    <textarea id="address" name="address" class="form-control"></textarea>
    <div class="invalid-feedback">โปรดระบุที่อยู่</div>
</div>

<!-- สีที่ชอบ -->
<div class="form-section">
    <label>สีที่ชอบ</label>
    <select id="color" name="color" class="form-control">
        <option value="">เลือกสี</option>
        <option>สีแดง</option>
        <option>สีเขียว</option>
        <option>สีน้ำเงิน</option>
        <option>สีเหลือง</option>
    </select>
    <div class="invalid-feedback">โปรดเลือกสี</div>
</div>

<!-- แนวเพลงที่ชอบ -->
<div class="form-section">
    <label>แนวเพลงที่ชอบ</label><br>
    <input type="radio" name="music" value="เพื่อชีวิต"> เพื่อชีวิต
    <input type="radio" name="music" value="ลูกทุ่ง"> ลูกทุ่ง
    <input type="radio" name="music" value="อื่นๆ"> อื่นๆ
    <div class="invalid-feedback d-none" id="music-error">โปรดเลือกแนวเพลง</div>
</div>

<!-- ยินยอม -->
<div class="form-section">
    <input type="checkbox" id="consent" name="consent">
    <label for="consent">ยินยอมให้เก็บข้อมูล</label>
    <div class="invalid-feedback d-none" id="consent-error">โปรดยินยอม</div>
</div>

<!-- ปุ่ม -->
<button type="button" class="btn-success" onclick="validateForm()">Submit</button>
</form>
@endsection

@push('scripts')
<script>
function validateForm() {
    let valid = true;

    function check(id) {
        const el = document.getElementById(id);
        if (!el.value) {
            el.classList.add('is-invalid');
            valid = false;
        } else {
            el.classList.remove('is-invalid');
            el.classList.add('is-valid');
        }
    }

    check('fname');
    check('lname');
    check('date');
    check('age');
    check('address');
    check('color');

    // เพศ
    const gender = document.querySelector('input[name="gender"]:checked');
    document.getElementById('gender-error').classList.toggle('d-none', gender);

    // เพลง
    const music = document.querySelector('input[name="music"]:checked');
    document.getElementById('music-error').classList.toggle('d-none', music);

    // consent
    const consent = document.getElementById('consent');
    document.getElementById('consent-error').classList.toggle('d-none', consent.checked);

    // รูป
    const photo = document.getElementById('photo');
    if (!photo.files.length) {
        photo.classList.add('is-invalid');
        valid = false;
    }

    if (valid) document.querySelector('form').submit();
}
</script>
@endpush
