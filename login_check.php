<body style="font-family: 'Itim', cursive;">
    

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<?php
// เชื่อมต่อกับฐานข้อมูล
$mysqli = new mysqli("localhost", "root", "", "petvilla");

// ตรวจสอบการเชื่อมต่อ
if ($mysqli->connect_error) {
    die("การเชื่อมต่อล้มเหลว: " . $mysqli->connect_error);
}

// รับข้อมูลจากแบบฟอร์ม
$username = $_POST['username'];
$password = $_POST['password'];

// สอบถามฐานข้อมูลเพื่อตรวจสอบชื่อผู้ใช้และรหัสผ่าน
$query = "SELECT * FROM owner WHERE owner_username = '$username' AND owner_password = '$password'";
$result = $mysqli->query($query);


if ($result->num_rows == 1) {
    // ถ้าข้อมูลตรงกัน

    session_start(); // เริ่มเซสชัน
    $_SESSION['username'] = $username; // เก็บชื่อผู้ใช้ในเซสชัน

    // แสดง SweetAlert แจ้งเตือนสำเร็จ
    echo '<body><script>
        Swal.fire({
            icon: "success",
            title: "เข้าสู่ระบบสำเร็จ",
            text: "รอซักครู่นะเหมียว..."
        });
        setTimeout(function() {
            window.location = "home_session.php";
        }, 2000); // รอเวลา 2 วินาที (2000 มิลลิวินาที) ก่อนเปลี่ยนหน้า
    </script></body>';
} else {
    // ถ้าไม่ตรงกัน
    echo '<body><script>
        // ใช้ SweetAlert เพื่อแสดงข้อความแจ้งเตือน
        Swal.fire({
            icon: "error",
            title: "เกิดข้อผิดพลาด",
            text: "ไม่พบผู้ใช้หรือข้อมูลไม่ตรงกัน"
        }).then(function() {
            window.location = "login.php"; // ลิงก์ไปยังหน้า login_page.php หรือหน้าที่ต้องการ
        });
    </script></body>';
}



?>
</body>