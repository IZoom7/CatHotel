<body style="font-family: 'Itim', cursive;">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <?php

require 'dbconn.php';

$sql_update="UPDATE pets SET pet_name='$_POST[pet_name]',age='$_POST[age]' ,pet_type='$_POST[pet_type]' ,pet_breed='$_POST[pet_breed]',pet_detail='$_POST[pet_detail]',pet_image='$_POST[pet_image]' WHERE pet_id='$_POST[pet_id]' ";

$result= $conn->query($sql_update);

if(!$result) {
    die("Error...: ". $conn->error);
} else {

echo '<body><script>
Swal.fire({
    icon: "success",
    title: "แก้ไขข้อมูลสำเร็จ",
    text: "รอซักครู่นะเหมียว..."
});
</script></body>';
header("refresh: 1; url=https://petvilla.online/reservation.php");
}

?>
</body>