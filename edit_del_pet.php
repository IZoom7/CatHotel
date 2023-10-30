<?php
require 'dbconn.php';
if (!isset($_GET['pet_id'])) {
    header("refresh: 0; url=https://petvilla.online/reservation.php");
}

if (isset($_GET['pet_id'])) {
    $sql = "SELECT * FROM pets WHERE pet_id = '$_GET[pet_id]'";
    $result = $conn->query($sql);
    $rowz = mysqli_fetch_array($result);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc(); // ดึงข้อมูลและใส่ใน $row
    } else {
        echo "ไม่พบข้อมูลสัตว์เลี้ยง"; // ในกรณีที่ไม่พบข้อมูล
    }



    session_start();
    if (isset($_SESSION['username'])) {
        $username = $_SESSION['username'];

        $sql2 = "SELECT owner_name FROM owner WHERE owner_username = '$username'";


        if (!$result) {
            die("Error : " . $conn->$conn_error);
        }
        $result2 = $conn->query($sql2);

        if (!$result2) {
            die("Error : " . $conn->$conn_error);
        }

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

        <style>

        .bar-2
        {
            display: flex;
            margin-right: 500px;
            padding-bottom: 200px;
        }

        </style>

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

    <div class="bar-2">   
    <div class="login-bar">

        <form action="edit_pet_success.php" method="post">
            <input type="hidden" name="pet_id" value="<?= $row['pet_id']; ?>">

            <div class="input-group mb-3" style="flex: 70;">
                <span class="input-group-text" id="basic-addon1">ชื่อสัตว์เลี้ยง</span>
                <input value="<?= $rowz['pet_name']; ?>" style="width: 60%;" type="text" class="form-control"
                    aria-label="กรุณากรอกชื่อสัตว์เลี้ยง" aria-describedby="basic-addon1" name="pet_name" required>
            </div>

            <div class="input-group mb-3" style="flex: 70;">
                <span class="input-group-text" id="basic-addon1">อายุ</span>
                <input value="<?= $rowz['age']; ?>" style="width: 60%;" type="text" class="form-control"
                    aria-label="กรุณากรอกชื่อสัตว์เลี้ยง" aria-describedby="basic-addon1" name="age" required>
            </div>

            <div class="input-group mb-3" style="flex: 70;">
                <span class="input-group-text" id="basic-addon1">ประเภทสัตว์เลี้ยง</span>
                <input value="<?= $rowz['pet_type']; ?>" style="width: 60%;" type="text" class="form-control"
                    aria-label="กรุณากรอกชื่อสัตว์เลี้ยง" aria-describedby="basic-addon1" name="pet_type" required>
            </div>

            <div class="input-group mb-3" style="flex: 70;">
                <span class="input-group-text" id="basic-addon1">สายพันธุ์</span>
                <input value="<?= $rowz['pet_breed']; ?>" style="width: 60%;" type="text" class="form-control"
                    aria-label="กรุณากรอกชื่อสัตว์เลี้ยง" aria-describedby="basic-addon1" name="pet_breed" required>
            </div>

            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">รายละเอียดเพิ่มเติม</label>
                <input value="<?= $rowz['pet_detail']; ?>" type="text"
                    placeholder="เช่น.....โรคประจำตัว อาหารโปรด ยาหรืออาหารที่แพ้" class="form-control"
                    id="exampleFormControlTextarea1" name="pet_detail">

                <!-- <textarea placeholder="เช่น.....โรคประจำตัว อาหารโปรด ยาหรืออาหารที่แพ้" class="form-control"
                    id="exampleFormControlTextarea1" rows="3" name="pet_detail"></textarea> -->


            </div>

            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">เพิ่มรูปภาพ</span>
                <textarea name="pet_image" class="form-control" id="uppic" cols="2"
                    rows="1"><?= $rowz['pet_image']; ?></textarea>
            </div>



            <br><br>
            <input id="login-form" style="margin-right: 15px;" class="btn btn-success" type="submit"
                value="บันทึกข้อมูล">
            <a id="login-form" style="margin-right: 150px;" class="btn btn-secondary" href="reservation.php">กลับ</a>



        </form>



    </div>


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