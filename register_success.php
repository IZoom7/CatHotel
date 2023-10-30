<body style="font-family: 'Itim', cursive;">
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<?php
require 'dbconn.php';

if (isset($_POST['owner_name']) && isset($_POST['owner_phone']) && isset($_POST['owner_username']) && isset($_POST['owner_password'])) {
    $owner_name = $_POST['owner_name'];
    $owner_phone = $_POST['owner_phone'];
    $owner_username = $_POST['owner_username'];
    $owner_password = $_POST['owner_password'];

    // ตรวจสอบว่าข้อมูลถูกกรอกครบหรือไม่
    if (empty($owner_name) || empty($owner_phone) || empty($owner_username) || empty($owner_password)) {
        // ถ้าข้อมูลไม่ถูกกรอกครบ
        echo '<script>
            Swal.fire({
                icon: "error",
                title: "โปรดใส่ข้อมูลให้ครบ",
                text: "กรุณากรอกข้อมูลให้ครบทุกช่อง",
            });
            setTimeout(function() {
                window.location.href = "https://petvilla.online/login.php";
            }, 1000); // นำทางหน้า login.php หลังจาก 1 วินาที
        </script>';
    } else {
        // ถ้าข้อมูลถูกกรอกครบ
        // ตรวจสอบว่า owner_username มีค่าซ้ำกันหรือไม่
        $check_username_sql = "SELECT * FROM owner WHERE owner_username = '$owner_username'";
        $result = $conn->query($check_username_sql);

        if ($result->num_rows > 0) {
            // ถ้ามี username ซ้ำกันในฐานข้อมูล
            echo '<script>
                Swal.fire({
                    icon: "error",
                    title: "ชื่อผู้ใช้ซ้ำกัน",
                    text: "ชื่อผู้ใช้นี้ถูกใช้ไปแล้ว โปรดเลือกชื่อผู้ใช้อื่น",
                });
                setTimeout(function() {
                    window.location.href = "https://petvilla.online/login.php";
                }, 1000); // นำทางหน้า login.php หลังจาก 1 วินาที
            </script>';
        } else {
            // ถ้า owner_username ไม่ซ้ำกัน
            $sql_insert = "INSERT INTO owner(owner_name, owner_phone, owner_username, owner_password) 
                VALUES ('$owner_name', '$owner_phone', '$owner_username', '$owner_password')";

            $result = $conn->query($sql_insert);

            if (!$result) {
                die("Error God Damn it : " . $conn->error);
            } else {
                echo '<script>
                    Swal.fire({
                        icon: "success",
                        title: "ลงทะเบียนสำเร็จ",
                        text: "รอซักครู่นะเหมียว..."
                    });
                    setTimeout(function() {
                        window.location.href = "https://petvilla.online/login.php";
                    }, 1000); // นำทางหน้า login.php หลังจาก 1 วินาที
                </script>';
            }
        }
    }
} else {
    // ถ้าไม่ได้กรอกข้อมูลครบ
    echo '<script>
        Swal.fire({
            icon: "error",
            title: "โปรดใส่ข้อมูลให้ครบ",
            text: "กรุณากรอกข้อมูลให้ครบทุกช่อง",
        });
        setTimeout(function() {
            window.location.href = "https://petvilla.online/login.php";
        }, 1000); // นำทางหน้า login.php หลังจาก 1 วินาที
    </script>';
}
?>


</body>