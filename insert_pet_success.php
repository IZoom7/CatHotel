<body style="font-family: 'Itim', cursive;">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <?php
    require 'dbconn.php';
    if (isset($_SESSION['username'])) {
        $username = $_SESSION['username'];
        
        $sql_put_owner = "SELECT owner_id FROM owner WHERE owner_username = '$username'";
        $sql_update = "INSERT INTO pets(pet_name,pet_type,pet_breed,age,pet_detail,pet_image,owner_id) VALUES ('$_POST[pet_name]', '$_POST[pet_type]', '$_POST[pet_breed]', '$_POST[age]', '$_POST[pet_detail]', '$_POST[pet_image]','$sql_put_owner')";


        $result = $conn->query($sql_update);

        if (!$result) {
            die("Error God Damn it : " . $conn->error);
        } else {

            echo '<body><script>
Swal.fire({
    icon: "success",
    title: "เพื่มรายชื่อสัตว์เลี้ยงสำเร็จ",
    text: "รอซักครู่นะเหมียว..."
});
</script></body>';
            header("refresh: 1; url=http://localhost/CatHotel/home_session.php");
        }
    }
    ?>
</body>