<?php
require 'dbconn.php';
if (!isset($_GET['employee_id'])) {
    header("refresh: 0; url=https://petvilla.online/reservation.php");
}

if (isset($_GET['employee_id'])) {
    $sql = "SELECT * FROM employees WHERE employee_id = '$_GET[employee_id]'";
    $result = $conn->query($sql);
    $rowz = mysqli_fetch_array($result);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc(); // ดึงข้อมูลและใส่ใน $row
    } else {
        echo "ไม่พบข้อมูลสัตว์เลี้ยง"; // ในกรณีที่ไม่พบข้อมูล
    }

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
    <title>PetVilla</title>
    <link rel="stylesheet" href="meowstyle.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Itim&family=Kanit:wght@200&family=Noto+Sans+Thai:wght@300&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="icon" href="img/cat_icon01.png" >
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Kanit">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


<style>
    td img
    {
        width: 200px;
        height: 120px;
    }


</style>

</head>
<body>

<!--------------------------  Navigation Bar  ---------------------------------->

    <nav>
        <a id="MeowVilla" href="admin_dashboard.php"><img src="img/PetVilla_Logo.png" alt=""></a>       
        <a href="#">รายชื่อสัตว์เลี้ยง</a>
        <a href="employee_list.php">รายชื่อพนักงาน</a>
        <a href="booking_list.php">รายการห้องพัก</a>
                         
        <a href="index.php" id="loginbtn" class="logout">ออกจากระบบ</a>

    </nav>
    <div class="bottom-stroke">
        <br>
    </div>
<!---------------------------Main---------------------------------->

<div style="margin-bottom: 70px; margin-top: 130px;" class="login-bar">
        <h4>แก้ไขข้อมูลพนักงาน</h4>
        <br>
        <img style="width: 210px; height: 130px; position: absolute; bottom: 57.2%; right: 55%;"
            src="img/dog_peek02.png" alt="">
        <form action="emp_edit_success.php" method="post" id="login-form">

            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">ชื่อ</span>
                <input type="text" class="form-control" placeholder="กรุณากรอกชื่อ"
                value="<?= $row['emp_name']; ?>" aria-label="กรุณากรอกชื่อ" aria-describedby="basic-addon1" name="emp_name"
                    autocomplete="off">
            </div>

            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">นามสกุล</span>
                <input value="<?= $row['emp_lastname']; ?>" type="text" class="form-control" placeholder="กรุณากรอกนามสกุล"
                    aria-label="กรุณากรอกนามสกุล" aria-describedby="basic-addon1" name="emp_lastname"
                    autocomplete="off">
            </div>

            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Email</span>
                <input value="<?= $row['emp_email']; ?>" type="text" class="form-control" placeholder="กรุณากรอกEmail" aria-label="กรุณากรอกEmail"
                    aria-describedby="basic-addon1" name="emp_email">
            </div>

            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">เบอร์โทรศัพท์</span>
                <input value="<?= $row['emp_phone']; ?>" type="text" class="form-control" placeholder="กรุณากรอกเบอร์โทรศัพท์"
                    aria-label="กรุณากรอกเบอร์โทรศัพท์" aria-describedby="basic-addon1" name="emp_phone">
            </div>

            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">ที่อยู่</span>
                <input value="<?= $row['emp_address']; ?>" type="text" class="form-control" placeholder="กรุณากรอกที่อยู่" aria-label="กรุณากรอกที่อยู่"
                    aria-describedby="basic-addon1" name="emp_address">
            </div>

            <div class="d-flex" style="width: 100%;">
                <div class="input-group mb-3">
                    <select style="margin-right: 20px;" class="form-select" aria-label="Choose Your headquarter"
                        name="headquarter_id">
                        <option selected>สาขาที่ต้องการทำงาน</option>
                        <option value="901">ดอนเมือง</option>
                        <option value="902">สนามบินสุวรรณภูมิ</option>
                        <option value="903">หมอชิต</option>
                        <option value="904">โคกอีเลิ้งซิตี้</option>
                    </select>
                </div>
            </div>



            <input style="margin-right: 15px;" class="btn btn-success" type="submit" value="แก้ไขข้อมูลพนักงาน">
            <a style="margin-right: 150px;" class="btn btn-secondary" href="admin_dashboard.php">กลับ</a>
            
        </form>
    </div>




<!-------------------- Bottom(Footer) -------------------------->

<footer class="bg-dark text-light py-4">
    <div class="container">
        <div class="footer-flex">
            <div class="footer-section">
                <h3>สาขาใกล้บ้านคุณ</h3>
                <p>📍 ดอนเมือง<br>📍 สนามบินสุวรรณภูมิ<br>📍 หมอชิต<br>📍 โคกอีเลิ้งซิตี้</p>
            </div>
            <div class="footer-section">
                <h3>Follow Us</h3>
                <ul class="list-unstyled">
                    <li><a href="#"><img src="img/facebook.png" alt="">Facebook : PetVilla</a></li>
                    <li><a href="#"><img src="img/twitter.png" alt="">Twitter(X) : @PetVilla_official</a></li>
                    <li><a href="#"><img src="img/instagram.png" alt="">Instagram : PetVilla</a></li>
                    <li><a href="#"><img src="img/line.png" alt="">Line : @PetVilla</a></li>
                </ul>
            </div>
            <div class="footer-section">
                <h3>Developed By.</h3>
                <p>Mr.Pakkatorn Pommin <br>Mr.Pitipong Prasirtsak <br>Mr.Sawettachat Kasemyart</p>
            </div>
        </div>
    </div>
</footer>


<script>

const logoutLinks = document.querySelectorAll('.logout');
logoutLinks.forEach((link) => {
  link.addEventListener('click', function (e) {
    e.preventDefault(); // ป้องกันการนำทางไปยัง index.html โดยค่าพื้นฐานของลิงค์

    Swal.fire({
      title: 'ยืนยันการออกจากระบบ',
      text: 'คุณแน่ใจหรือไม่ว่าต้องการออกจากระบบ?',
      icon: 'warning',
      showCancelButton: true,
      confirmButtonText: 'ใช่',
      cancelButtonText: 'ยกเลิก',
    }).then((result) => {
      if (result.isConfirmed) {
        // ทำการออกจากระบบ
        // ตรงนี้คุณสามารถเพิ่มโค้ดเพื่อนำผู้ใช้ออกจากระบบ เช่น การลบคุกกี้หรือทำการตัดการเชื่อมต่อ
        window.location.href = 'index.php'; // นำทางไปยังหน้า index.html หรืออีกหน้าที่คุณต้องการ
      }
    });
  });
});

</script>
</body>
</html>