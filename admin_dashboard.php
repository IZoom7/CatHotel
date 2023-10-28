<?php
    require 'dbconn.php';
  
    $sql = "SELECT * FROM pets";
    $result = $conn->query($sql);
    
    if(!$result){
        die("Error : ". $conn->$conn_error);
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

</head>
<body>

<!--------------------------  Navigation Bar  ---------------------------------->

    <nav>
        <a id="MeowVilla" href="index.php"><img src="img/PetVilla_Logo.png" alt=""></a>       
        <a href="login.php">จองห้องพักสัตว์เลี้ยง</a>
        <a href="login.php">แอบส่องน้องๆ</a>
        <a href="login.php">ติดต่อพี่เลี้ยง</a>
        <a href="#">เกี่ยวกับเรา</a>
                         
        <a id="loginbtn" href="login.php">เข้าสู่ระบบ</a>
        <a href="register.php">สมัครสมาชิก</a>

    </nav>
    <div class="bottom-stroke">
        <br>
    </div>
<!---------------------------Main---------------------------------->

<table  class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">PET-ID</th>
                    <th scope="col-4">ชื่อสัตว์เลี้ยง</th>
                    <th scope="col-4">ประเภท</th>
                    <th scope="col-4">สายพันธุ์</th>
                    <th scope="col-4">อายุ</th>
                    <th scope="col-4">รายละเอียด</th>
                    <th scope="col-4">รูปภาพ</th>
                    <th scope="col-4">OWNER-ID</th>
                </tr>
            </thead>
            <tbody>

<?php
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>
                    <td>" . $row["pet_id"] . "</td>" . "
                    <td>" . $row["pet_name"] . "</td>" . "
                    <td>" . $row["pet_type"] . "</td>" . "
                    <td>" . $row["pet_breed"] . "</td>" . "
                    <td>" . $row["age"] . "</td>" . "
                    <td>" . $row["pet_detail"] . "</td>";
        
                // Display the image from BLOB data using base64_encode
                $imageData = base64_encode($row["pet_image"]);
                echo '<td><img src="data:image/jpeg;base64,' . $imageData . '" width="100" height="100" /></td>';
                
                echo "<td>" . $row["owner_id"] . "</td>";
        
                echo "</tr>";
            }
        } else {
            echo "0 results";
        }
        $conn->close();
        ?>
    </tbody>
</table>


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