<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <title>Workshop HTML Form Validation</title>

    <style>
        body {
            font-family: sans-serif;
        }
        label {
            font-weight: bold;
            display: block;
            margin-top: 10px;
        }
        .is-valid {
            border: 2px solid green;
        }
        .is-invalid {
            border: 2px solid red;
        }
        button {
            margin-top: 15px;
            padding: 6px 15px;
            font-weight: bold;
        }
    </style>
</head>
<body>

<h1>สมัครสมาชิก</h1>

<form id="registerForm">

    <label>ชื่อ</label>
    <input type="text" id="firstname">

    <label>สกุล</label>
    <input type="text" id="lastname">

    <label>วันเดือนปีเกิด</label>
    <input type="date" id="birthday">

    <label>อายุ</label>
    <input type="number" id="age">

    <label>เพศ</label>
    <select id="gender">
        <option value="">--เลือก--</option>
        <option value="male">ชาย</option>
        <option value="female">หญิง</option>
    </select>

    <label>รูปโปรไฟล์</label>
    <input type="file" id="profile">

    <label>ที่อยู่</label>
    <textarea id="address"></textarea>

    <label>สีที่ชอบ</label>
    <input type="color" id="favorite_color">

    <label>แนวเพลงที่ชอบ</label>
    <select id="music" multiple>
        <option value="pop">Pop</option>
        <option value="rock">Rock</option>
        <option value="jazz">Jazz</option>
    </select>

    <label>
        <input type="checkbox" id="agree"> ยินยอมเงื่อนไข
    </label>

    <button type="submit">บันทึก</button>

</form>

<script>
    document.getElementById("registerForm").addEventListener("submit", function(e) {
        e.preventDefault();

        let isPass = true;

        function check(el) {
            if (
                (el.type === "checkbox" && !el.checked) ||
                (el.type !== "checkbox" && el.value === "")
            ) {
                el.classList.add("is-invalid");
                el.classList.remove("is-valid");
                isPass = false;
            } else {
                el.classList.add("is-valid");
                el.classList.remove("is-invalid");
            }
        }

        check(firstname);
        check(lastname);
        check(birthday);
        check(age);
        check(gender);
        check(profile);
        check(address);
        check(favorite_color);
        check(music);
        check(agree);

        if (isPass) {
            alert("กรอกข้อมูลครบถ้วน (Pass)");
        }
    });
</script>

</body>
</html>
