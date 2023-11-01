<body style="font-family: 'Itim', cursive;">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<?php
require 'dbconn.php';
$sql_update="DELETE FROM employees WHERE employee_id = '$_GET[employee_id]'";

$result= $conn->query($sql_update);

if(!$result) {
    die("Error...: ". $conn->error);
} else {

echo '<body><script>
Swal.fire({
    icon: "success",
    title: "ลบข้อมูลสำเร็จ",
    text: "รอซักครู่นะเหมียว..."
});
</script></body>';
header("refresh: 1; url=https://petvilla.online/employee_list.php");
}

?>
</body>