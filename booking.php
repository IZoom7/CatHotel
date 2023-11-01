<?php
require 'dbconn.php';
session_start();
if (isset($_SESSION['username'])) {
    $username = $_SESSION['username'];

    $sql = "SELECT * FROM pets WHERE owner_id = (SELECT owner_id from owner where owner_username = '$username')";
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
    <title>Booking</title>
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

    <style>
        .bookandpic {
            display: flex;
            padding-bottom: 50px;

        }

        .login-bar {
            border-radius: 15px;
            border: 0.1px solid black;
            background-color: #d7d7d7;
            margin-top: 16px;
            margin-left: 27px;
            padding: 60px;
            width: 560px;
        }

        .pet-group {
            display: flex;
            flex-wrap: wrap;
            padding-top: 10px;
        }

        .pet-card {
            margin-left: 6px;
            border: 1px grey solid;
            border-radius: 10px;
            padding: 10px;
            background-color: #efefef;
        }

        .pet-card img {
            width: 135px;
            height: 85px;
            border-radius: 4px;
        }

        .botton-grp label {
            width: 100%;
        }

        footer {
            position: absolute;
            bottom: -515px;
            width: 100%;
        }
    </style>



</head>

<body class="loginmenu">
    <nav>
        <a id="MeowVilla" href="home_session.php"><img src="img/PetVilla_Logo.png" alt=""></a>
        <a href="reservation.php">จองห้องพักสัตว์เลี้ยง</a>
        <a href="#">แอบส่องน้องๆ</a>
        <a href="#">ติดต่อพี่เลี้ยง</a>
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


        <a href="#" id="loginbtn" class="logout">ออกจากระบบ</a>


    </nav>
    <div class="bottom-stroke">
        <br>
    </div><br><br><br>

    <!----------------------------จอง-------------------------------->

    <form action="bookinght_success.php" method="post" id="login-form">
    <div class="bookandpic">
        <div style="margin-left: 95px; ;" class="login-bar">
            <h4>การจองห้องพัก</h4>
            <br>
            <img style="width: 280px; height: 130px; position: absolute; bottom: 60.5%; right: 70%;"
                src="img/cat_peek02.png" alt="">

            

                <div class="input-group mb-3">
                    <select class="form-select" aria-label="Choose Your headquarter " name="headquarter_id">
                        <option selected>สาขา</option>
                        <option value="901">ดอนเมือง</option>
                        <option value="902">สนามบินสุวรรณภูมิ</option>
                        <option value="903">หมอชิต</option>
                        <option value="904">โคกอีเลิ้งซิตี้</option>
                    </select>
                </div><br>

                <div class="input-group mb-3" style="flex: 30;">
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">Check-In Date:</span>
                        <input name="checkin_date" style="font-family: 'Kanit', sans-serif;" type="date" id="checkin">
                    </div>
                </div>
                <div class="input-group mb-3" style="flex: 30;">
                    <div class="input-group mb-3" style="flex: 70;">
                        <span class="input-group-text" id="basic-addon1">Check-Out:</span>
                        <input name="checkout_date" style="font-family: 'Kanit', sans-serif;" type="date" id="checkout">
                    </div>
                </div>

                <label>เลือกแพ็กเกจ:</label>

                <input value="129" type="radio" class="btn-check" name="amount" id="kitty">
                <label class="btn btn-outline-success" for="kitty">Kitty</label>

                <input value="249" type="radio" class="btn-check" name="amount" id="adult">
                <label class="btn btn-outline-primary" for="adult">Adult</label>

                <input value="669" type="radio" class="btn-check" name="amount" id="exotic">
                <label class="btn btn-outline-danger" for="exotic">Exotic</label><br><br>

                <h5> จำนวนเงินที่ต้องจ่าย: <span id="totalAmount"></span> บาท</h5><br>
                
                <input type="hidden" value="totalAmount" name="totalAmount">

                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">ส่งสลิปการจ่ายเงิน</span>
                    <input type="file" class="form-control" name="payment_proof" accept="image/*" required>
                </div>
                <br><br>

                <div style="font-family: 'Kanit', sans-serif;">
                    <input style="margin-right: 15px;" class="btn btn-success" type="submit" value="จองห้อง">
                    
                    <a style="margin-right: 150px;" class="btn btn-secondary"
                        href="home_session.php">กลับไปยังหน้าหลัก</a>
                </div>

        </div>

                    <div style="width: 750px;" class="login-bar">
                        <h4>เลือกสัตว์เลี้ยงที่จะเข้าพัก</h4>
                        <div class="pet-group">
                            <?php
                            if ($result->num_rows > 0) {
                                while ($row = $result->fetch_assoc()) {

                                    echo '<div class="pet-card">';
                                    echo $row['pet_image'];
                                    echo '<h5>' . $row['pet_name'] . '</h5>';
                                    echo '<div class="botton-grp">';
                                    echo '<input type="checkbox" class="btn-check" id="' . $row['pet_id'] . '" name="pet_selection[]">';
                                    echo '<label class="btn btn-outline-dark" for="' . $row['pet_id'] . '">เลือก</label><br>';
                                    echo '</div>';
                                    echo '</div>';

                                }
                            }
                            ?>
                        </div>
                    </div>
        
    </div>
    </form>

    <script>
                    function calculateTotal() {
                        var checkin = new Date(document.getElementById("checkin").value);
                        var checkout = new Date(document.getElementById("checkout").value);
                        var amount = parseFloat(document.querySelector('input[name="amount"]:checked').value);

                        var totalTimeInMilliseconds = checkout - checkin;
                        var totalTimeInHours = totalTimeInMilliseconds / (1000 * 60 * 60 * 24); // หน่วยเวลาในชั่วโมง
                        var totalAmount = amount * totalTimeInHours;

                        document.getElementById("totalAmount").textContent = totalAmount.toFixed(2); // แสดงผลทั้งหมดเป็นทศนิยม 2 ตำแหน่ง
                    }

                    // เพิ่มการเชื่อมโยงอิเวนต์กับการคำนวณเมื่อเกิดการเปลี่ยนแปลง
                    document.getElementById("checkin").addEventListener("change", calculateTotal);
                    document.getElementById("checkout").addEventListener("change", calculateTotal);
                    var amountRadios = document.querySelectorAll('input[name="amount"]');
                    amountRadios.forEach(function (radio) {
                        radio.addEventListener("change", calculateTotal);
                    });

                    // เรียกใช้ฟังก์ชันครั้งแรกเมื่อหน้าเว็บโหลด
                    calculateTotal();

                </script>
</body>

<!------------------Footer---------------------->
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


</html>