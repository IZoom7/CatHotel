<body style="font-family: 'Itim', cursive;">
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<?php
require 'dbconn.php';
if(isset($_GET['employee_id'])){
    echo '<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>';
    echo '<script>';
    echo 'Swal.fire({';
    echo '  title: "คุณต้องการลบข้อมูลพนักงานท่านนี้หรือไม่?",';
    echo '  icon: "warning",';
    echo '  showCancelButton: true,';
    echo '  confirmButtonText: "ใช่, ลบ",';
    echo '  cancelButtonText: "ยกเลิก"';
    echo '}).then((result) => {';
    echo '  if (result.isConfirmed) {';
    echo '    window.location.href = "delete_emp_success.php?employee_id=' . $_GET['employee_id'] . '";';
    echo '  } else {';
    echo '    window.location.href = "employee_list.php";';
    echo '  }';
    echo '})';
    echo '</script>';
}
?>



</body>