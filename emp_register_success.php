<body style="font-family: 'Itim', cursive;">
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<?php
require 'dbconn.php';

// ตรวจสอบว่ามีข้อมูลถูกส่งมาจากฟอร์มหรือไม่
if (isset($_POST['emp_name']) && isset($_POST['emp_lastname']) && isset($_POST['emp_email']) && isset($_POST['emp_phone']) && isset($_POST['emp_address']) && isset($_POST['headquarter_id'])) {
    // รับข้อมูลจากฟอร์ม
    $emp_name = $_POST['emp_name'];
    $emp_lastname = $_POST['emp_lastname'];
    $emp_email = $_POST['emp_email'];
    $emp_phone = $_POST['emp_phone'];
    $emp_address = $_POST['emp_address'];
    $headquarter_id = $_POST['headquarter_id'];
    $emp_doc = $_POST['emp_doc'];

    // ดำเนินการ INSERT ข้อมูลลงในฐานข้อมูล
    $sql = "INSERT INTO employees (emp_name, emp_lastname, emp_email, emp_phone, emp_address, headquarter_id,emp_doc) VALUES ('$emp_name', '$emp_lastname', '$emp_email', '$emp_phone', '$emp_address', '$headquarter_id',$emp_doc)";

    if (mysqli_query($conn, $sql)) {
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
    } else {
        echo "เกิดข้อผิดพลาดในการบันทึกข้อมูล: " . mysqli_error($conn);
    }
} else {
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