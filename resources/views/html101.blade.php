<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <title>ฟอร์มสมัครสมาชิก</title>
    <style>
        body {
            font-family: sans-serif;
        }
        label {
            color: #2b5ac8; /* น้ำเงิน */
            font-weight: bold;
        }
        h1 {
            color: #d12f2f; /* แดง */
        }
        button {
            font-weight: bold;
        }
    </style>
</head>
<body>
    <h1>สมัครสมาชิก</h1>

    <form action="{{ route('register.submit') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <!-- ชื่อ -->
        <label style="color:#8A2BE2">ชื่อ:</label>
        <input type="text" name="firstname" required>
        <br><br>

        <!-- สกุล -->
        <label style="color:#4B0082">สกุล:</label>
        <input type="text" name="lastname" required>
        <br><br>

        <!-- วันเดือนปีเกิด -->
        <label style="color:#0000FF">วันเดือนปีเกิด:</label>
        <input type="date" name="birthday" required>
        <br><br>

        <!-- เพศ -->
        <label style="color:#008000">เพศ:</label>
        <select name="gender" required>
            <option value="">--เลือก--</option>
            <option value="male">ชาย</option>
            <option value="female">หญิง</option>
            <option value="other">อื่น ๆ</option>
        </select>
        <br><br>

        <!-- รูป -->
        <label style="color:#FFFF00">รูปโปรไฟล์:</label>
        <input type="file" name="profile_image" accept="image/*">
        <br><br>

        <!-- ที่อยู่ -->
        <label style="color:#FFA500">ที่อยู่:</label>
        <textarea name="address" rows="3" required></textarea>
        <br><br>

        <!-- สีที่ชอบ -->
        <label style="color:#FF0000">สีที่ชอบ:</label>
        <input type="color" name="favorite_color">
        <br><br>

        <!-- แนวเพลงที่ชอบ -->
        <label style="color:#8A2BE2">แนวเพลงที่ชอบ:</label>
        <select name="music_genre[]" multiple>
            <option value="pop">Pop</option>
            <option value="rock">Rock</option>
            <option value="hiphop">Hip-Hop</option>
            <option value="jazz">Jazz</option>
        </select>
        <br><br>

        <!-- checkbox ยินยอม -->
        <label style="color:#4B0082"><input type="checkbox" name="agree" value="1" required>
            ยินยอมเงื่อนไข
        </label>
        <br><br>

        <!-- ปุ่ม reset และ บันทึก -->
        <button type="reset">รีเซ็ต</button>
        <button type="submit">บันทึก</button>
    </form>
</body>
</html>
