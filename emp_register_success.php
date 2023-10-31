<body style="font-family: 'Itim', cursive;">
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<?php
require 'dbconn.php';


    $emp_name = $_POST['emp_name'];
    $emp_lastname = $_POST['emp_lastname'];
    $emp_email = $_POST['emp_email'];
    $emp_phone = $_POST['emp_phone'];
    $emp_address = $_POST['emp_address'];
    $headquarter_id = $_POST['headquarter_id'];
    $emp_doc = $_POST['emp_doc'];


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
 
?>


</body>