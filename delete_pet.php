<body>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<?php
require 'dbconn.php';

if(isset($_GET['pet_id'])) {
    $pet_id = $_GET['pet_id'];
    
    // แสดง SweetAlert เพื่อยืนยันการลบข้อมูล
    echo '<script>
    Swal.fire({
        title: "คุณแน่ใจหรือไม่?",
        text: "คุณต้องการลบข้อมูลนี้ใช่หรือไม่?",
        icon: "warning",
        showCancelButton: true,
        confirmButtonText: "ใช่, ฉันต้องการลบ!",
        cancelButtonText: "ไม่, ยกเลิก"
    }).then(function(result) {
        if (result.isConfirmed) {
            // ถ้ายืนยันการลบให้ลบข้อมูล
            deletePet(' . $pet_id . ');
        }
    });
    </script>';
} else {
    echo "ไม่มีข้อมูลสำหรับการลบ";
}

function deletePet($pet_id) {
    global $conn;
    $sql_update = "DELETE FROM `pets` WHERE `pet_id` = '$pet_id'";
    $result = $conn->query($sql_update);

    if (!$result) {
        die("Error...: " . $conn->error);
    } else {
        // แสดง SweetAlert หลังจากลบสำเร็จ
        echo '<script>
        Swal.fire({
            icon: "success",
            title: "ลบข้อมูลสำเร็จ",
            text: "รอซักครู่นะเหมียว..."
        }).then(function() {
            window.location.href = "https://petvilla.online/reservation.php";
        });
        </script>';
    }
}
?>

</body>








</body>