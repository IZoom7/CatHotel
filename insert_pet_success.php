<body>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<?php
session_start();
require "dbconn.php";

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Define the target directory where uploaded images will be stored
    $targetDirectory = "uploads/"; // Create this directory if it doesn't exist

    // Get the uploaded image file
    $uploadedFile = $_FILES["pet_image"];

    // Check if a file was uploaded
    if ($uploadedFile && $uploadedFile["error"] === 0) {
        $fileName = $targetDirectory . $uploadedFile["name"];

        // Move the uploaded file to the target directory
        if (move_uploaded_file($uploadedFile["tmp_name"], $fileName)) {
            // File was successfully uploaded, now insert data into the database
            $petName = $_POST["pet_name"];
            $petType = $_POST["pet_type"];
            $petBreed = $_POST["pet_breed"];
            $age = $_POST["age"];
            $petDetail = $_POST["pet_detail"];
            $ownerId = $_POST["owner_id"];

            // Insert data into the database
            $sql = "INSERT INTO pets (pet_name, pet_type, pet_breed, age, pet_detail, pet_image, owner_id) VALUES (?, ?, ?, ?, ?, ?, ?)";
            $stmt = $conn->prepare($sql);

            if ($stmt) {
                // Bind parameters and execute the statement
                $stmt->bind_param("ssssss", $petName, $petType, $petBreed, $age, $petDetail, $fileName, $ownerId);
                $stmt->execute();
                $stmt->close();

                // Display success message and redirect
                echo '<body><script>
                    Swal.fire({
                        icon: "success",
                        title: "เพิ่มชื่อสัตว์เลี้ยงสำเร็จ",
                        text: "รอซักครู่นะเหมียว..."
                    });
                </script></body>';
                header("refresh: 1; url=https://petvilla.online/home_session.php");
            } else {
                // Display an error message
                echo '<body><script>
                    Swal.fire({
                        icon: "error",
                        title: "เกิดข้อผิดพลาดในการเพิ่มข้อมูลสัตว์เลี้ยง",
                        text: "กรุณาลองอีกครั้ง"
                    });
                </script></body>';
            }
        } else {
            // Display an error message
            echo '<body><script>
                Swal.fire({
                    icon: "error",
                    title: "เกิดข้อผิดพลาดในการอัปโหลดรูปภาพ",
                    text: "กรุณาลองอีกครั้ง"
                });
            </script></body>';
        }
    } else {
        // Display an error message if no file was selected
        echo '<body><script>
            Swal.fire({
                icon: "error",
                title: "โปรดเลือกไฟล์รูปภาพเพื่ออัปโหลด",
                text: "กรุณาลองอีกครั้ง"
            });
        </script></body>';
    }
}
?>

</body>