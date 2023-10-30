<body style="font-family: 'Itim', cursive;">
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<?php
require 'dbconn.php';

// ตรวจสอบว่ามีการส่ง pet_id ผ่าน GET หรือไม่
if (!isset($_GET['pet_id'])) {
    header("refresh: 0; url=https://petvilla.online/reservation.php");
}

$pet_id = $_GET['pet_id'];

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['confirm_delete'])) {
    // ผู้ใช้ยืนยันการลบ
    // สร้างคำสั่ง SQL สำหรับลบข้อมูล
    $sql_delete = "DELETE FROM pets WHERE pet_id = '$pet_id'";

    $result = $conn->query($sql_delete);

    if (!$result) {
        die("Error: " . $conn->error);
    } else {
        // ลบสำเร็จ
        echo '<script>
        Swal.fire({
            icon: "success",
            title: "ลบข้อมูลสำเร็จ",
            text: "รอซักครู่นะเหมียว..."
        }).then(function(result) {
            window.location.href = "https://petvilla.online/reservation.php";
        });
        </script>';
    }
} else {
    // แสดงแบบฟอร์มยืนยันการลบ
    echo '<script>
    Swal.fire({
        title: "ยืนยันการลบ",
        text: "คุณต้องการลบข้อมูลนี้ใช่หรือไม่?",
        icon: "warning",
        showCancelButton: true,
        confirmButtonText: "ใช่, ลบ",
        cancelButtonText: "ไม่, ยกเลิก"
    }).then(function(result) {
        if (result.isConfirmed) {
            // ถ้าผู้ใช้ยืนยันการลบ
            window.location.href = "delete_pet_success.php";
        } else {
            // ถ้าผู้ใช้ยกเลิกการลบ
            window.location.href = "https://petvilla.online/reservation.php";
        }
    });
    </script>';
}
?>




</body>