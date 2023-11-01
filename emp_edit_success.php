<body style="font-family: 'Itim', cursive;">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <?php

    require 'dbconn.php';

    $sql_update = "UPDATE employees SET emp_name='$_POST[emp_name]',emp_lastname='$_POST[emp_lastname]' ,emp_email='$_POST[emp_email]' ,emp_phone='$_POST[emp_phone]',emp_address='$_POST[emp_address]' WHERE employee_id='$_POST[employee_id]'";

    $result = $conn->query($sql_update);

    if (!$result) {
        die("Error...: " . $conn->error);
    } else {

        echo '<body><script>
Swal.fire({
    icon: "success",
    title: "แก้ไขข้อมูลสำเร็จ",
    text: "รอซักครู่นะเหมียว..."
});
</script></body>';
        header("refresh: 1; url=https://petvilla.online/admin_dashboard.php");
    }

    ?>
</body>