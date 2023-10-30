<?php
require 'dbconn.php';
if (!isset($_GET['pet_id'])) {
    header("refresh: 0; url=https://petvilla.online/reservation.php");
}


session_start();
if (isset($_SESSION['username'])) {
    $username = $_SESSION['username'];

    $sql = "SELECT * FROM pets WHERE pet_id = '$_GET[pet_id]'";
    $sql2 = "SELECT owner_name FROM owner WHERE owner_username = '$username'";


    $result = $conn->query($sql);

    if (!$result) {
        die("Error : " . $conn->$conn_error);
    }
    $result2 = $conn->query($sql2);

    if (!$result2) {
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
    <script async src="//pic.in.th/sdk/pup.js" data-url="https://pic.in.th/upload" data-auto-insert="html-embed"
        data-sibling="#uppic" data-palette="blue"></script>


</head>

<body class="loginmenu">
    <nav>
        <a id="MeowVilla" href="home_session.php"><img src="img/PetVilla_Logo.png" alt=""></a>
        <a href="reservation.php">จองห้องพักสัตว์เลี้ยง</a>
        <a href="#">แอบส่องน้องๆ</a>
        <a href="employee_chat.php">ติดต่อพี่เลี้ยง</a>
        <a href="#">เกี่ยวกับเรา</a>

        <div
            style="position: absolute; font-size: 18px; right: 20%; bottom: 86%; background-color:#0f645b; color: white; border-radius: 5px; padding-top: 2px; padding-left: 15px; padding-right: 0px; text-align: center;">
            <img style="margin-right: 210px; margin-bottom:-41px; width: 28px; height: 28px;" src="img/user_icon01.png"
                alt="">

            <?php
            if ($result2->num_rows > 0) {
                $row = $result2->fetch_assoc(); // อ่านแค่รายการแรก
                echo "<p>" . $row['owner_name'] . "</p>"; // แสดงข้อมูล
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

    <div class="login-bar">

        <form action="edit_pet_success.php" method="post" id="login-form">

            <div class="d-flex flex-wrap align-items-start">
                <div class="input-group mb-3" style="flex: 70;">
                    <span class="input-group-text" id="basic-addon1">ชื่อสัตว์เลี้ยง</span>
                    <input value="<?= htmlspecialchars($row['pet_name']); ?>" style="width: 60%;" type="text"
                        class="form-control" placeholder="กรุณากรอกชื่อสัตว์เลี้ยง"
                        aria-label="กรุณากรอกชื่อสัตว์เลี้ยง" aria-describedby="basic-addon1" name="pet_name" required>
                </div>
                <div class="input-group mb-3" style="flex: 30;">
                    <select style="width: 100%;" class="form-select" aria-label="Your Pet's Age" name="age">
                        <option value="อายุ" <?= ($row['age'] == 'อายุ') ? 'selected' : ''; ?>>อายุ</option>
                        <option value="น้อยกว่า 1 ปี" <?= ($row['age'] == 'น้อยกว่า 1 ปี') ? 'selected' : ''; ?>>น้อยกว่า 1
                            ปี</option>
                        <option value="มากกว่า 1 ปี" <?= ($row['age'] == 'มากกว่า 1 ปี') ? 'selected' : ''; ?>>มากกว่า 1 ปี
                        </option>
                        <option value="2 ปีขึ้นไป" <?= ($row['age'] == '2 ปีขึ้นไป') ? 'selected' : ''; ?>>2 ปีขึ้นไป
                        </option>
                    </select>
                </div>
                <div class="input-group mb-3">
                    <select style="margin-right: 20px;" class="form-select" aria-label="Choose Your Pet's Type"
                        name="pet_type">
                        <option value="ประเภทสัตว์เลี้ยง" <?= ($row['pet_type'] == 'ประเภทสัตว์เลี้ยง') ? 'selected' : ''; ?>>ประเภทสัตว์เลี้ยง</option>
                        <option value="สุนัข" <?= ($row['pet_type'] == 'สุนัข') ? 'selected' : ''; ?>>สุนัข</option>
                        <option value="แมว" <?= ($row['pet_type'] == 'แมว') ? 'selected' : ''; ?>>แมว</option>
                        <option value="Special" <?= ($row['pet_type'] == 'Special') ? 'selected' : ''; ?>>Special</option>
                    </select>
                </div>
                <div class="input-group mb-3">
                    <select class="form-select" aria-label="Choose Your Pet's Breed" name="pet_breed">
                        <option value="สายพันธ์ุ" <?= ($row['pet_breed'] == 'สายพันธ์ุ') ? 'selected' : ''; ?>>สายพันธ์ุ
                        </option>
                        <option value="ลิงซ์ยูเรเซีย" <?= ($row['pet_breed'] == 'ลิงซ์ยูเรเซีย') ? 'selected' : ''; ?>>
                            ลิงซ์ยูเรเซีย</option>
                        <option value="บ๊อบแคท" <?= ($row['pet_breed'] == 'บ๊อบแคท') ? ' selected' : ''; ?>>บ๊อบแคท
                        </option>
                        <option value="คาราคัล" <?= ($row['pet_breed'] == 'คาราคัล') ? ' selected' : ''; ?>>คาราคัล
                        </option>
                        <option value="เซอร์วัล" <?= ($row['pet_breed'] == 'เซอร์วัล') ? ' selected' : ''; ?>>เซอร์วัล
                        </option>
                        <option value="อเมริกันช็อตแฮร์" <?= ($row['pet_breed'] == 'อเมริกันช็อตแฮร์') ? ' selected' : ''; ?>>อเมริกันช็อตแฮร์</option>
                        <option value="บริติชช็อตแฮร์" <?= ($row['pet_breed'] == 'บริติชช็อตแฮร์') ? ' selected' : ''; ?>>
                            บริติชช็อตแฮร์</option>
                        <option value="สก๊อตติชโฟลด์" <?= ($row['pet_breed'] == 'สก๊อตติชโฟลด์') ? ' selected' : ''; ?>>
                            สก๊อตติชโฟลด์</option>
                        <option value="รัสเซียนบลู" <?= ($row['pet_breed'] == 'รัสเซียนบลู') ? ' selected' : ''; ?>>
                            รัสเซียนบลู</option>
                        <option value="วิเชียรมาศ" <?= ($row['pet_breed'] == 'วิเชียรมาศ') ? ' selected' : ''; ?>>
                            วิเชียรมาศ</option>
                        <option value="เปอร์เซีย" <?= ($row['pet_breed'] == 'เปอร์เซีย') ? ' selected' : ''; ?>>เปอร์เซีย
                        </option>
                        <option value="ชิวาวา" <?= ($row['pet_breed'] == 'ชิวาวา') ? ' selected' : ''; ?>>ชิวาวา</option>
                        <option value="บีเกิ้ล" <?= ($row['pet_breed'] == 'บีเกิ้ล') ? ' selected' : ''; ?>>บีเกิ้ล
                        </option>
                        <option value="บูลด็อก" <?= ($row['pet_breed'] == 'บูลด็อก') ? ' selected' : ''; ?>>บูลด็อก
                        </option>
                        <option value="ปอมเมอเรเนียน" <?= ($row['pet_breed'] == 'ปอมเมอเรเนียน') ? ' selected' : ''; ?>>
                            ปอมเมอเรเนียน</option>
                        <option value="คาวาเลียร์ คิง ชาลส์ สแปเนียล" <?= ($row['pet_breed'] == 'คาวาเลียร์ คิง ชาลส์ สแปเนียล') ? ' selected' : ''; ?>>คาวาเลียร์ คิง ชาลส์ สแปเนียล</option>
                        <option value="ชิบะ" <?= ($row['pet_breed'] == 'ชิบะ') ? ' selected' : ''; ?>>ชิบะ</option>
                        <option value="ชิสุ" <?= ($row['pet_breed'] == 'ชิสุ') ? ' selected' : ''; ?>>ชิสุ</option>
                        <option value="ดัชชุน" <?= ($row['pet_breed'] == 'ดัชชุน') ? ' selected' : ''; ?>>ดัชชุน</option>
                        <option value="บอร์เดอร์ คอลลี่" <?= ($row['pet_breed'] == 'บอร์เดอร์ คอลลี่') ? ' selected' : ''; ?>>บอร์เดอร์ คอลลี่</option>
                        <option value="บาเซนจิ" <?= ($row['pet_breed'] == 'บาเซนจิ') ? ' selected' : ''; ?>>บาเซนจิ
                        </option>
                        <option value="บิชอง ฟริเซ่" <?= ($row['pet_breed'] == 'บิชอง ฟริเซ่') ? ' selected' : ''; ?>>บิชอง
                            ฟริเซ่</option>
                        <option value="บูล เทอร์เรียร์" <?= ($row['pet_breed'] == 'บูล เทอร์เรียร์') ? ' selected' : ''; ?>>บูล เทอร์เรียร์</option>
                        <option value="พุดเดิลทอย<" <?= ($row['pet_breed'] == 'พุดเดิลทอย<') ? ' selected' : ''; ?>>
                            พุดเดิลทอย</option>
                        <option value="มอลทีส" <?= ($row['pet_breed'] == 'มอลทีส') ? ' selected' : ''; ?>>มอลทีส</option>
                        <option value="ยอร์กเชียร์ เทอร์เรียร์" <?= ($row['pet_breed'] == 'ยอร์กเชียร์ เทอร์เรียร์') ? ' selected' : ''; ?>>ยอร์กเชียร์ เทอร์เรียร์</option>
                        <option value="ลาบราดอร์" <?= ($row['pet_breed'] == 'ลาบราดอร์') ? ' selected' : ''; ?>>ลาบราดอร์
                        </option>
                        <option value="อลาสกัน มาลามิวท์" <?= ($row['pet_breed'] == 'อลาสกัน มาลามิวท์') ? ' selected' : ''; ?>>อลาสกัน มาลามิวท์</option>
                        <option value="อัฟกัน ฮาวด์" <?= ($row['pet_breed'] == 'อัฟกัน ฮาวด์') ? ' selected' : ''; ?>>
                            อัฟกัน ฮาวด์</option>
                        <option value="เกรย์ฮาวด์" <?= ($row['pet_breed'] == 'เกรย์ฮาวด์') ? ' selected' : ''; ?>>
                            เกรย์ฮาวด์</option>
                        <option value="เชทแลนด์ ชีพด็อก" <?= ($row['pet_breed'] == 'เชทแลนด์ ชีพด็อก') ? ' selected' : ''; ?>>เชทแลนด์ ชีพด็อก</option>
                        <option value="เชาเชา" <?= ($row['pet_breed'] == 'เชาเชา') ? ' selected' : ''; ?>>เชาเชา</option>
                        <option value="เฟรนช์ บูลด็อก" <?= ($row['pet_breed'] == 'เฟรนช์ บูลด็อก') ? ' selected' : ''; ?>>
                            เฟรนช์ บูลด็อก</option>
                        <option value="เยอรมันเชพเพิร์ด" <?= ($row['pet_breed'] == 'เยอรมันเชพเพิร์ด') ? ' selected' : ''; ?>>เยอรมันเชพเพิร์ด</option>
                        <option value="โกลเด้น รีทริฟเวอร์" <?= ($row['pet_breed'] == 'โกลเด้น รีทริฟเวอร์') ? ' selected' : ''; ?>>โกลเด้น รีทริฟเวอร์</option>
                        <option value="ไซบีเรียน ฮัสกี" <?= ($row['pet_breed'] == 'ไซบีเรียน ฮัสกี') ? ' selected' : ''; ?>>ไซบีเรียน ฮัสกี</option>
                        <option value="ขาวมณี" <?= ($row['pet_breed'] == 'ขาวมณี') ? ' selected' : ''; ?>>ขาวมณี</option>
                        <option value="สฟิงซ์" <?= ($row['pet_breed'] == 'สฟิงซ์') ? ' selected' : ''; ?>>สฟิงซ์</option>
                        <option value="อะบิสซิเนียน" <?= ($row['pet_breed'] == 'อะบิสซิเนียน') ? ' selected' : ''; ?>>
                            อะบิสซิเนียน</option>
                        <option value="อ็อกซี่แคท" <?= ($row['pet_breed'] == 'อ็อกซี่แคท') ? ' selected' : ''; ?>>
                            อ็อกซี่แคท</option>
                        <option value="เอ็กซ์โซติก ช็อตแฮร์" <?= ($row['pet_breed'] == 'เอ็กซ์โซติก ช็อตแฮร์') ? ' selected' : ''; ?>>เอ็กซ์โซติก ช็อตแฮร์</option>
                        <option value="นอร์วีเจียน ฟอเรสต์" <?= ($row['pet_breed'] == 'นอร์วีเจียน ฟอเรสต์') ? ' selected' : ''; ?>>นอร์วีเจียน ฟอเรสต์</option>
                        <option value="มันช์กิ้น" <?= ($row['pet_breed'] == 'มันช์กิ้น') ? ' selected' : ''; ?>>มันช์กิ้น
                        </option>
                        <option value="สีสวาด" <?= ($row['pet_breed'] == 'สีสวาด') ? ' selected' : ''; ?>>สีสวาด</option>
                        <option value="เมนคูน" <?= ($row['pet_breed'] == 'เมนคูน') ? ' selected' : ''; ?>>เมนคูน</option>
                        <option value="แร็กดอล" <?= ($row['pet_breed'] == 'แร็กดอล') ? ' selected' : ''; ?>>แร็กดอล
                        </option>
                        <option value="บอร์ซอย" <?= ($row['pet_breed'] == 'บอร์ซอย') ? ' selected' : ''; ?>>บอร์ซอย
                        </option>
                        <option value="เบงกอล" <?= ($row['pet_breed'] == 'เบงกอล') ? ' selected' : ''; ?>>เบงกอล</option>
                        <option value="พันธุ์ทาง" <?= ($row['pet_breed'] == 'พันธุ์ทาง') ? ' selected' : ''; ?>>พันธุ์ทาง
                        </option>
                        <option value="ไม่ทราบ" <?= ($row['pet_breed'] == 'ไม่ทราบ') ? ' selected' : ''; ?>>ไม่ทราบ
                        </option>
                        <!-- เพิ่มตัวเลือกของสายพันธ์ุที่เหลือที่นี่ -->
                    </select>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">รายละเอียดเพิ่มเติม</label>
                    <input value="<?= htmlspecialchars($row['pet_detail']); ?>" type="text"
                        placeholder="เช่น.....โรคประจำตัว อาหารโปรด ยาหรืออาหารที่แพ้" class="form-control"
                        id="exampleFormControlTextarea1" name="pet_detail">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">เพิ่มรูปภาพ</span>
                    <input value="<?= htmlspecialchars($row['pet_image']); ?>" name="pet_image" class="form-control"
                        id="uppic" cols="2" rows="1">
                </div>
                <div style="font-family: 'Kanit', sans-serif;">
                    <input style="margin-right: 15px;" class="btn btn-success" name="submit" type="submit"
                        value="แก้ไขข้อมูล">
                    <a style="margin-right: 150px;" class="btn btn-secondary" href="reservation.php">กลับ</a>
                </div>


                <div style="font-family: 'Kanit', sans-serif;">
                    <input style="margin-right: 15px;" class="btn btn-success" name="submit" type="submit"
                        value="แก้ไขข้อมูล">
                    <a style="margin-right: 150px;" class="btn btn-secondary" href="reservation.php">กลับ</a>
                </div>


            </div>

            <br><br>

        </form>
    </div>












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