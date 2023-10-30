<body style="font-family: 'Itim', cursive;">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<?php
require 'dbconn.php';
$sql_update="DELETE FROM pets WHERE pet_id = '$_GET[pet_id]'";

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
header("refresh: 1; url=https://petvilla.online/reservation.php");
}

?>
</body>