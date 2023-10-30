<?php
require 'dbconn.php';
if (!isset($_GET['pet_id'])) {
    header("refresh: 0; url=https://petvilla.online/reservation.php");
}

$sql = "SELECT * FROM pets WHERE pet_id = '$_GET[pet_id]'";
$result = $conn->query($sql);
$row = mysqli_fetch_array($result);
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
        <input type="hidden" name="pet_id" value="<?=$row['pet_id'];?>">
        <label for="pet_name">ชื่อสัตว์เลี้ยง:</label>
        <input type="text" name="pet_name" value="<?=$row['pet_name'];?>"><br>

        <label for="age">อายุ:</label>
        <input type="text" name="age" value="<?=$row['age'];?>"><br>

        <label for="pet_type">ประเภทสัตว์เลี้ยง:</label>
        <input type="text" name="pet_type" value="<?=$row['pet_type'];?>"><br>

        <label for="pet_breed">สายพันธุ์:</label>
        <input type="text" name="pet_breed" value="<?=$row['pet_breed'];?>"><br>

        <label for="pet_detail">รายละเอียดเพิ่มเติม:</label>
        <input type="text" name="pet_detail" value="<?=$row['pet_detail'];?>"><br>

        <label for="pet_image">รูปภาพ:</label>
        <textarea id="uppic" name="pet_image" id="pet_image" cols="3" rows="1"><?=$row['pet_image'];?></textarea>

        <br><br>
        <input style="margin-right: 15px;" class="btn btn-success" type="submit" value="บันทึกข้อมูล">
        <a style="margin-right: 150px;" class="btn btn-secondary" href="reservation.php">กลับ</a>
    

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