<?php
require 'dbconn.php';
session_start();
if (isset($_SESSION['username'])) {
    $username = $_SESSION['username'];

    $sql = "SELECT owner_id FROM owner WHERE owner_username = '$username'";
    $result = $conn->query($sql);

    if (!$result) {
        die("Error : " . $conn->$conn_error);
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
    <script async src="//pic.in.th/sdk/pup.js" data-url="https://pic.in.th/upload" data-auto-insert="html-embed" data-sibling="#uppic" data-palette="blue"></script>

</head>

<body class="loginmenu">
    <nav>
        <a id="MeowVilla" href="home_session.php"><img src="img/PetVilla_Logo.png" alt=""></a>
        <a href="#">จองห้องพักสัตว์เลี้ยง</a>
        <a href="#">แอบส่องน้องๆ</a>
        <a href="#">ติดต่อพี่เลี้ยง</a>
        <a href="#">เกี่ยวกับเรา</a>
    </nav>
    <div class="bottom-stroke">
        <br>
    </div>
    <div class="login-bar">
        <h4>เพิ่มข้อมูลสัตว์เลี้ยง</h4>
        <br>
        <img style="width: 280px; height: 130px; position: absolute; bottom: 55.4%; right: 35%;"
            src="img/cat_peek02.png" alt="">
        <form action="insert_pet_success.php" method="post" id="login-form">

            <div class="d-flex flex-wrap align-items-start">
                <div class="input-group mb-3" style="flex: 70;">
                    <span class="input-group-text" id="basic-addon1">ชื่อสัตว์เลี้ยง</span>
                    <input style="width: 60%;" type="text" class="form-control" placeholder="กรุณากรอกชื่อสัตว์เลี้ยง"
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
                        <option value="เบงกอล">เบงกอล</option>
                        <option value="พันธุ์ทาง">พันธุ์ทาง</option>
                        <option value="ไม่ทราบ">ไม่ทราบ</option>

                    </select>
                </div>
            </div>
            <br>


            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">รายละเอียดเพิ่มเติม</label>
                <input type="text" placeholder="เช่น.....โรคประจำตัว อาหารโปรด ยาหรืออาหารที่แพ้" class="form-control"
                    id="exampleFormControlTextarea1"  name="pet_detail">
                
                <!-- <textarea placeholder="เช่น.....โรคประจำตัว อาหารโปรด ยาหรืออาหารที่แพ้" class="form-control"
                    id="exampleFormControlTextarea1" rows="3" name="pet_detail"></textarea> -->


            </div>

                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">เพิ่มรูปภาพ</span>
                    <textarea name="pet_image" class="form-control" id="uppic" cols="2" rows="1"></textarea>
                </div>
            
            <div class="input-group mb-3" ">
                    <input style=" width: 60%;" type="hidden" class="form-control" value="<?php
                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            echo $row['owner_id'];
                        }
                    } else {
                        echo "0 results";
                    }
                    $conn->close();
                    ?>
                        " aria-describedby="basic-addon1" name="owner_id">

            </div>

            <br><br>
            <div style="font-family: 'Kanit', sans-serif;">
                <input style="margin-right: 15px;" class="btn btn-success" name="submit" type="submit"
                    value="เพิ่มสัตว์เลี้ยง">
                <a style="margin-right: 150px;" class="btn btn-secondary" href="home_session.php">กลับไปยังหน้าหลัก</a>
            </div>
        </form>
    </div>
</body>

</html>