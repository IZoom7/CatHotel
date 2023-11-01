<body style="font-family: 'Itim', cursive;">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <?php
    require 'dbconn.php';

    $headquarter_id = $_POST['headquarter_id'];
    $checkin_date = $_POST['checkin_date'];
    $checkout_date = $_POST['checkout_date'];
    $totalAmount = $_POST['totalAmount'];
    $selectedCount = count($_POST['pet_selection']);
    $payment_proof = $_POST['payment_proof'];

    $sql_update = "INSERT INTO reservation (headquarter_id, checkin_date, checkout_date, payment_amount, pet_number, payment_proof) 
               VALUES ('$headquarter_id', '$checkin_date', '$checkout_date', '$totalAmount', '$selectedCount', '$payment_proof')";

    $result = $conn->query($sql_update);


    if (!$result) {
        die("Error God Damn it : " . $conn->error);
    } else {
        echo '<body><script>
Swal.fire({
    icon: "success",
    title: "ทำรายการสำเร็จ",
    text: "รอซักครู่นะเหมียว..."
});
</script></body>';
        header("refresh: 1; url=https://petvilla.online/home_session.php");
    }

    ?>
</body>