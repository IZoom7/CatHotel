<body style="font-family: 'Itim', cursive;">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <?php
require 'dbconn.php';

if(isset($_POST['pet_id'])) {
    // Validate and sanitize user input
    $pet_id = $_POST['pet_id'];
    $pet_name = $_POST['pet_name'];
    $pet_type = $_POST['pet_type'];
    $pet_breed = $_POST['pet_breed'];
    $age = $_POST['age'];
    $pet_detail = $_POST['pet_detail'];
    $pet_image = $_POST['pet_image'];

    // Use prepared statements to prevent SQL injection
    $sql_update = "UPDATE pets SET pet_name=?, pet_type=?, pet_breed=?, age=?, pet_detail=?, pet_image=? WHERE pet_id=?";
    $stmt = $conn->prepare($sql_update);
    $stmt->bind_param("ssssssi", $pet_name, $pet_type, $pet_breed, $age, $pet_detail, $pet_image, $pet_id);

    if ($stmt->execute()) {
        echo '<body><script>
        Swal.fire({
            icon: "success",
            title: "แก้ไขข้อมูลสำเร็จ",
            text: "รอซักครู่นะเหมียว..."
        });
        </script></body>';
        header("refresh: 1; url=https://petvilla.online/reservation.php");
    } else {
        die("Error: " . $stmt->error);
    }

    $stmt->close();
}

$conn->close();
?>

</body>