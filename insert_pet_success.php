<body style="font-family: 'Itim', cursive;">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <?php
session_start();
require "dbconn.php";

// Check if a file was uploaded
if ($_FILES['pet_image']['name'] != '') {
    // Set the upload directory
    $upload_dir = "uploaded/";

    // Get the file extension
    $file_extension = pathinfo($_FILES['pet_image']['name'], PATHINFO_EXTENSION);

    // Generate a unique filename using the current date and time
    $new_filename = date("YmdHis") . "." . $file_extension;

    // Set the path for the uploaded file
    $upload_path = $upload_dir . $new_filename;

    // Move the uploaded file to the specified directory
    if (move_uploaded_file($_FILES['pet_image']['tmp_name'], $upload_path)) {
        // File uploaded successfully
        $pet_image = $new_filename;
    } else {
        // Handle the upload error
        die("Error uploading file.");
    }
} else {
    // No file was uploaded, set $pet_image to the existing value (if any)
    $pet_image = isset($_POST['pet_image']) ? $_POST['pet_image'] : '';
}

// Rest of your code
// ...

$sql_update = "INSERT INTO pets (pet_name, pet_type, pet_breed, age, pet_detail, pet_image, owner_id) VALUES ('$_POST[pet_name]', '$_POST[pet_type]', '$_POST[pet_breed]', '$_POST[age]', '$_POST[pet_detail]', '$pet_image', '$_POST[owner_id]')";

$result = $conn->query($sql_update);

if (!$result) {
    die("Error: " . $conn->error);
} else {
    echo '<body><script>
Swal.fire({
    icon: "success",
    title: "เพิ่มชื่อสัตว์เลี้ยงสำเร็จ",
    text: "รอซักครู่นะเหมียว..."
});
</script></body>';
    header("refresh: 1; url=https://petvilla.online/home_session.php");
}
?>

</body>