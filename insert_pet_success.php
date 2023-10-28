<body style="font-family: 'Itim', cursive;">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <?php
session_start();
require "dbconn.php";


    $fileupload = $_POST['pet_image']; // รับค่าไฟล์จากฟอร์ม
    $fileupload = (isset($_POST['pet_image']) ? $_POST['pet_image'] : '');

    //ฟังก์ชั่นวันที่
    date_default_timezone_set('Asia/Bangkok');
    $date = date("Ymd");
    //สุ่มตัวเลข
    $numrand = (mt_rand());
    //เพิ่มไฟล์
    $upload = $_FILES['pet_image'];
    if ($upload != '') { //not select file
        //โฟลเดอร์ที่จะupload file เข้าไป
        $path = "uploaded/";
        //เอาชื่อไฟล์ออกให้เหลือแต่นามสกุล
        $type = strrchr($_FILES['uploaded']['name'], ".");

        //ตั้งชื่อไฟล์ใหม่โดยเอาเวลาไว้หน้าชื่อไฟล์เดิม
        $newname = $date . $numrand . $type;
        $path_copy = $path . $newname;
        $path_link = "uploaded/" . $newname;

        //คัดลอกไฟล์ไปเก็บที่เว็บเซิร์ฟเวอร์
        move_uploaded_file($_FILES['pet_image']['tmp_name'], $path_copy);
    }



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