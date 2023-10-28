<body>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<?php
require_once 'dbconn.php';
$sql_update = "INSERT INTO owner(owner_name,owner_phone,owner_username,owner_password) VALUES ('$_POST[owner_name]', '$_POST[owner_phone]', '$_POST[owner_username]', '$_POST[owner_password]')";


$result= $conn->query($sql_update);

if(!$result) {
    die("Error God Damn it : ". $conn->error);
} else {

echo '<body><script>
Swal.fire({
    icon: "success",
    title: "ลงทะเบียนสำเร็จ",
    text: "รอซักครู่นะเหมียว..."
});
</script></body>';
header("refresh: 1; url=http://localhost/CatHotel/login.php");
}

?>
</body>