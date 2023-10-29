<?php
    require 'dbconn.php';
    if(!isset($_GET['pet_id'])){
        header("refresh: 0; url=https://petvilla.online/reservation.php");
    }

    
    session_start();
if (isset($_SESSION['username'])) {
    $username = $_SESSION['username'];

    $sql = "SELECT * FROM pets WHERE pet_id = '$_GET[pet_id]'";
    $sql2 = "SELECT owner_name FROM owner WHERE owner_username = '$username'";

    
    $result = $conn->query($sql);
    
    if(!$result){
        die("Error : ". $conn->$conn_error);
    }
    $result2 = $conn->query($sql2);
    
    if(!$result2){
        die("Error : ". $conn->$conn_error);
    }

}
  

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>PetVilla Login</title>
    <link rel="stylesheet" href="meowstyle.css">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Thai:wght@300&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
        crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Itim&family=Kanit:wght@200&family=Noto+Sans+Thai:wght@300&display=swap"
        rel="stylesheet">
    <link rel="icon" href="img/cat_icon01.png">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

       
</head>

<body class="loginmenu">
<nav>
        <a id="MeowVilla" href="home_session.php"><img src="img/PetVilla_Logo.png" alt=""></a>       
        <a href="reservation.php">จองห้องพักสัตว์เลี้ยง</a>
        <a href="#">แอบส่องน้องๆ</a>
        <a href="employee_chat.php">ติดต่อพี่เลี้ยง</a>
        <a href="#">เกี่ยวกับเรา</a>

        <div style="position: absolute; font-size: 18px; right: 20%; bottom: 86%; background-color:#0f645b; color: white; border-radius: 5px; padding-top: 2px; padding-left: 15px; padding-right: 0px; text-align: center;">
            <img style="margin-right: 210px; margin-bottom:-41px; width: 28px; height: 28px;" src="img/user_icon01.png" alt="">
            
            <?php
                   if ($result2->num_rows > 0) {
                        $row = $result2->fetch_assoc(); // อ่านแค่รายการแรก
                        echo "<p>".$row['owner_name']."</p>"; // แสดงข้อมูล
                    } else {
                        echo "0 results";
                    }
                    $conn->close(); 
                ?>
            
            
        </div>
                       
        
        <a href="index.php" id="loginbtn" class="logout">ออกจากระบบ</a>


    </nav>
    <div class="bottom-stroke">
        <br>
    </div><br>

    <!---------------------------Content------------------------------>


    <form action="edit_pet_success.php" method="post" id="login-form">

<div class="d-flex flex-wrap align-items-start">
    <div class="input-group mb-3" style="flex: 70;">
        <span class="input-group-text" id="basic-addon1">ชื่อสัตว์เลี้ยง</span>
        <input value="<?=$row['pet_name'];?>" style="width: 60%;" type="text" class="form-control" placeholder="กรุณากรอกชื่อสัตว์เลี้ยง"
            aria-label="กรุณากรอกชื่อสัตว์เลี้ยง" aria-describedby="basic-addon1" name="pet_name" required>
    </div>
    <div class="input-group mb-3" style="flex: 30;">
        <select style="width: 100%;" class="form-select" aria-label="Your Pet's Age" name="age">
            <option selected>อายุ</option>
            <option value="น้อยกว่า 1 ปี">น้อยกว่า 1 ปี</option>
            <option value="มากกว่า 1 ปี">มากกว่า 1 ปี</option>
            <option value="2 ปีขึ้นไป">2 ปีขึ้นไป</option>
        </select>
    </div>
</div>



<div class="d-flex" style="width: 100%;">
    <div class="input-group mb-3">
        <select style="margin-right: 20px;" class="form-select" aria-label="Choose Your Pet's Type"
            name="pet_type">
            <option selected>ประเภทสัตว์เลี้ยง</option>
            <option value="สุนัข">สุนัข</option>
            <option value="แมว">แมว</option>
            <option value="Special">Special</option>
        </select>
    </div>

    <div class="input-group mb-3">
        <select class="form-select" aria-label="Choose Your Pet's Breed" name="pet_breed">
            <option selected>สายพันธ์ุ</option>
            <option value="ลิงซ์ยูเรเซีย">ลิงซ์ยูเรเซีย</option>
            <option value="บ๊อบแคท">บ๊อบแคท</option>
            <option value="คาราคัล">คาราคัล</option>
            <option value="เซอร์วัล">เซอร์วัล</option>
            <option value="อเมริกันช็อตแฮร์">อเมริกันช็อตแฮร์</option>
            <option value="บริติชช็อตแฮร์">บริติชช็อตแฮร์</option>
            <option value="สก๊อตติชโฟลด์">สก๊อตติชโฟลด์</option>
            <option value="รัสเซียนบลู">รัสเซียนบลู</option>
            <option value="วิเชียรมาศ">วิเชียรมาศ</option>
            <option value="เปอร์เซีย">เปอร์เซีย</option>
            <option value="ชิวาวา">ชิวาวา</option>
            <option value="บีเกิ้ล">บีเกิ้ล</option>
            <option value="บูลด็อก">บูลด็อก</option>
            <option value="ปอมเมอเรเนียน">ปอมเมอเรเนียน</option>
            <option value="คาวาเลียร์ คิง ชาลส์ สแปเนียล">คาวาเลียร์ คิง ชาลส์ สแปเนียล</option>
            <option value="ชิบะ">ชิบะ</option>
            <option value="ชิสุ">ชิสุ</option>
            <option value="ดัชชุน">ดัชชุน</option>
            <option value="บอร์เดอร์ คอลลี่">บอร์เดอร์ คอลลี่</option>
            <option value="บาเซนจิ">บาเซนจิ</option>
            <option value="บิชอง ฟริเซ่">บิชอง ฟริเซ่</option>
            <option value="บูล เทอร์เรียร์">บูล เทอร์เรียร์</option>
            <option value="พุดเดิ้ลทอย<">พุดเดิ้ลทอย</option>
            <option value="มอลทีส">มอลทีส</option>
            <option value="ยอร์กเชียร์ เทอร์เรียร์">ยอร์กเชียร์ เทอร์เรียร์</option>
            <option value="ลาบราดอร์">ลาบราดอร์</option>
            <option value="อลาสกัน มาลามิวท์">อลาสกัน มาลามิวท์</option>
            <option value="อัฟกัน ฮาวด์">อัฟกัน ฮาวด์</option>
            <option value="เกรย์ฮาวด์">เกรย์ฮาวด์</option>
            <option value="เชทแลนด์ ชีพด็อก">เชทแลนด์ ชีพด็อก</option>
            <option value="เชาเชา">เชาเชา</option>
            <option value="เฟรนช์ บูลด็อก">เฟรนช์ บูลด็อก</option>
            <option value="เยอรมันเชพเพิร์ด">เยอรมันเชพเพิร์ด</option>
            <option value="โกลเด้น รีทริฟเวอร์">โกลเด้น รีทริฟเวอร์</option>
            <option value="ไซบีเรียน ฮัสกี">ไซบีเรียน ฮัสกี</option>
            <option value="ขาวมณี">ขาวมณี</option>
            <option value="สฟิงซ์">สฟิงซ์</option>
            <option value="อะบิสซิเนียน">อะบิสซิเนียน</option>
            <option value="อ็อกซี่แคท">อ็อกซี่แคท</option>
            <option value="เอ็กซ์โซติก ช็อตแฮร์">เอ็กซ์โซติก ช็อตแฮร์</option>
            <option value="นอร์วีเจียน ฟอเรสต์">นอร์วีเจียน ฟอเรสต์</option>
            <option value="มันช์กิ้น">มันช์กิ้น</option>
            <option value="สีสวาด">สีสวาด</option>
            <option value="เมนคูน">เมนคูน</option>
            <option value="แร็กดอล">แร็กดอล</option>
            <option value="บอร์ซอย">บอร์ซอย</option>
            <option value="เบงกอล">เบงกอล</option>
            <option value="พันธุ์ทาง">พันธุ์ทาง</option>
            <option value="ไม่ทราบ">ไม่ทราบ</option>

        </select>
    </div>
</div>
<br>


<div class="mb-3">
    <label for="exampleFormControlTextarea1" class="form-label">รายละเอียดเพิ่มเติม</label>
    <input value="<?=$row['pet_detail'];?>" type="text" placeholder="เช่น.....โรคประจำตัว อาหารโปรด ยาหรืออาหารที่แพ้" class="form-control"
        id="exampleFormControlTextarea1"  name="pet_detail">
    
    <!-- <textarea placeholder="เช่น.....โรคประจำตัว อาหารโปรด ยาหรืออาหารที่แพ้" class="form-control"
        id="exampleFormControlTextarea1" rows="3" name="pet_detail"></textarea> -->


</div>

    <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1">เพิ่มรูปภาพ</span>
        <textarea value="<?=$row['pet_image'];?>" name="pet_image" class="form-control" id="uppic" cols="2" rows="1"></textarea>
    </div>


</div>

<br><br>
<div style="font-family: 'Kanit', sans-serif;">
    <input style="margin-right: 15px;" class="btn btn-success" name="submit" type="submit"
        value="แก้ไขข้อมูล">
    <a style="margin-right: 150px;" class="btn btn-secondary" href="reservation.php">กลับ</a>
</div>
</form>












    <!---------------------------Footer------------------------------>
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