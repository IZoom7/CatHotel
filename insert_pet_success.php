<body style="font-family: 'Itim', cursive;">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <?php
session_start();
require "dbconn.php";

// Check if the pet_image URL is available
if (isset($_POST['pet_image_url'])) {
    $pet_image_url = $_POST['pet_image_url'];
} else {
    $pet_image_url = ''; // Set to an empty string if no URL is provided
}

// Rest of your form data
$pet_name = $_POST['pet_name'];
$age = $_POST['age'];
$pet_type = $_POST['pet_type'];
$pet_breed = $_POST['pet_breed'];
$pet_detail = $_POST['pet_detail'];
$owner_id = $_POST['owner_id'];

// Your SQL INSERT query
$sql_insert = "INSERT INTO pets (pet_name, age, pet_type, pet_breed, pet_detail, pet_image, owner_id) 
              VALUES ('$pet_name', '$age', '$pet_type', '$pet_breed', '$pet_detail', '$pet_image_url', '$owner_id')";

$result = $conn->query($sql_insert);

if (!$result) {
    die("Error: " . $conn->error);
} else {
    // Display a success message using SweetAlert
    echo '<script>
        Swal.fire({
            icon: "success",
            title: "เพิ่มชื่อสัตว์เลี้ยงสำเร็จ",
            text: "รอซักครู่นะเหมียว..."
        }).then(function() {
            window.location.href = "https://petvilla.online/home_session.php";
        });
    </script>';
}
?>


</body>