<body style="font-family: 'Itim', cursive;">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <?php
session_start();
require "dbconn.php";


    // File upload path
$targetDir = "uploaded/";

if (isset($_POST['submit'])) {
    if (!empty($_FILES["pet_image"]["name"])) {
        $fileName = basename($_FILES["pet_image"]["name"]);
        $targetFilePath = $targetDir . $fileName;
        $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);


    $sql_update = "INSERT INTO pets(pet_name,pet_type,pet_breed,age,pet_detail,pet_image,owner_id) VALUES ('$_POST[pet_name]', '$_POST[pet_type]', '$_POST[pet_breed]', '$_POST[age]','$_POST[pet_detail]','$newname','$_POST[owner_id]')";


    $result = $conn->query($sql_update);

    if (!$result) {
        die("Error God Damn it : " . $conn->error);
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