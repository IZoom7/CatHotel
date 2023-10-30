<?php
    require 'dbconn.php';
    session_start();
if (isset($_SESSION['username'])) {
    $username = $_SESSION['username'];

    $sql = "SELECT * FROM pets WHERE owner_id = (SELECT owner_id from owner where owner_username = '$username')";
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

    <style>
        .pet-group
        {
            display: flex;
            flex-wrap: wrap;
            padding-top: 60px;
        }
        .pet-card
        {
            border: 1px grey solid;
            border-radius: 10px;
            margin-left: 12px;
            padding: 10px;
            background-color: #efefef;
        }
        
        .pet-card h5
        {
            padding-top: 15px;
            padding-left: 10px;
        }
        .pet-card p
        {
            padding-left: 10px;
        }
        
        .pet-card img
        {
            width: 250px;
            height: 150px;
            border-radius: 5px;
        }
        .botton-grp
        {
            display: flex;
            
        }
        #edit-pet
        {
            width: 70%;
            
        }
        #del-pet
        {
            width: 30%;
            margin-left: 10px;
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
                       
        
        <a href="#" id="loginbtn" class="logout">ออกจากระบบ</a>


    </nav>
    <div class="bottom-stroke">
        <br>
    </div><br><br><br>
    
   <!--------------------------------รายชื่อสัตว์+เพิ่ม-----------------------------------> 
  
  <h3 style="margin-left: 200px;">รายชื่อสัตว์เลี้ยงที่คุณมี</h3>


  <div style="margin-left: 150px;" class="pet-group">
    <?php
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) { 
            echo '<div class="pet-card">';
            echo $row['pet_image'];
            echo '<h5>' . $row['pet_name'] . '</h5>';
            echo '<p>สายพันธุ์ : ' . $row['pet_breed'] . '</p>';
            echo '<div class="botton-grp">';
            echo '<a id="edit-pet" class="btn btn-warning" href="edit_del_pet.php?pet_id='.$row['pet_id'].'">แก้ไข</a>';
            echo '<a id="del-pet" class="btn btn-danger" href="#">ลบ</a>';            
            echo '</div>';
            echo '</div>';
        }
    }
    // เพิ่ม "เพิ่มรายชื่อสัตว์เลี้ยง" นอกจากลูป
    ?>
    <a style="text-decoration: none; padding-top: 12px;" href="insert_pets.php">
        <div style=" text-decoration: none; color: #707070; width: 270px; height: 295px; display: flex; flex-direction: column; align-items: center; justify-content: center;" class="pet-card">
            <img style="width: 50px; height: 50px;" src="img/plus.png" alt="">
            <h6 style="text-decoration: none; margin-top: 10px;">เพิ่มรายชื่อสัตว์เลี้ยง</h6>
        </div>
    </a>
</div>

  
  
  
    
   
   
   
   
   
   <!------------------------------ เลือกแพ็กเกจ --------------------------------------->
   
   <div class="container-fluid bg-light pt-5 pb-4">
    <div class="container py-5">
        <div class="d-flex flex-column text-center mb-5">
            <h4 class="text-secondary mb-3">Pricing Plan</h4>
            <h1 class="display-4 m-0">Choose the <span class="text-primary">Best Price</span></h1>
        </div>
        <div class="row">
            <div class="col-lg-4 mb-4">
                <div class="card border-0">
                    <div class="card-header position-relative border-0 p-0 mb-4">
                        <img class="card-img-top" src="img/cat02.jpg" alt="">
                        <div class="position-absolute d-flex flex-column align-items-center justify-content-center w-100 h-100" style="top: 0; left: 0; z-index: 1; background: rgba(0, 0, 0, .5);">
                            <h3 style="color: aliceblue;">Kitty</h3>
                            <h1 class="display-4 text-white mb-0">
                                <small class="align-top" style="font-size: 22px; line-height: 45px;">฿</small>129<small class="align-bottom" style="font-size: 16px; line-height: 40px;">/ วัน</small>
                            </h1>
                        </div>
                    </div>
                    <div class="card-body text-center p-0">
                        <ul style="text-align: left;" class="list-group list-group-flush mb-4">
                            <li class="list-group-item p-2"><i class="fa fa-check text-secondary mr-2"></i>✅  การให้ขนม/อาหารเสริมระหว่างวัน</li>
                            <li class="list-group-item p-2"><i class="fa fa-check text-secondary mr-2"></i>✅   รองรับแมวหรือสุนัขจำนวน 1 ตัว</li>
                            <li class="list-group-item p-2"><i class="fa fa-times text-danger mr-2"></i>✅   กล้องสำหรับการดูเหล่าสัตว์เลี้ยง</li>
                            <li class="list-group-item p-2"><i class="fa fa-times text-danger mr-2"></i>❌ ติดต่อพี่เลี้ยงได้ตลอด 24 ชั่วโมง</li>
                            <li class="list-group-item p-2"><i class="fa fa-times text-danger mr-2"></i>❌   ปรึกษาสัตว์แพทย์ฟรี</li>
                            <li class="list-group-item p-2"><i class="fa fa-times text-danger mr-2"></i>❌   บริการอาบน้ำ & ตัดขน</li>
                            <li class="list-group-item p-2"><i class="fa fa-times text-danger mr-2"></i>❌   บริการรับ-ส่งสัตว์เลี้ยงถึงหน้าบ้าน(ไม่เกิน 20 กม.)</li>
                        </ul>
                    </div>
                    <div class="card-footer border-0 p-0">
                        <a href="#" class="btn btn-primary btn-block p-3" style="background-color: #219C90; border-radius: 10px; width: 100%; margin-top: 46px; font-size: 24px;">จองห้องเลย!</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mb-4">
                <div class="card border-0">
                    <div class="card-header position-relative border-0 p-0 mb-4">
                        <img class="card-img-top" src="img/husky01.jpg" alt="">
                        <div class="position-absolute d-flex flex-column align-items-center justify-content-center w-100 h-100" style="top: 0; left: 0; z-index: 1; background: rgba(0, 0, 0, .5);">
                            <h3 style="color: #E9B824;">Adult</h3>
                            <h1 class="display-4 text-white mb-0">
                                <small class="align-top" style="font-size: 22px; line-height: 45px;">฿</small>249<small class="align-bottom" style="font-size: 16px; line-height: 40px;">/ วัน</small>
                            </h1>
                        </div>
                    </div>
                    <div class="card-body text-center p-0">
                        <ul style="text-align: left;" class="list-group list-group-flush mb-4">
                            <li class="list-group-item p-2"><i class="fa fa-check text-secondary mr-2"></i>✅  การให้ขนม/อาหารเสริมระหว่างวัน</li>
                            <li class="list-group-item p-2"><i class="fa fa-check text-secondary mr-2"></i>✅   รองรับแมวหรือสุนัขจำนวนสูงสุด 2 ตัว</li>
                            <li class="list-group-item p-2"><i class="fa fa-times text-danger mr-2"></i>✅   กล้องสำหรับการดูเหล่าสัตว์เลี้ยง</li>
                            <li class="list-group-item p-2"><i class="fa fa-times text-danger mr-2"></i>❌ ติดต่อพี่เลี้ยงได้ตลอด 24 ชั่วโมง</li>
                            <li class="list-group-item p-2"><i class="fa fa-times text-danger mr-2"></i>❌   ปรึกษาสัตว์แพทย์ฟรี</li>
                            <li class="list-group-item p-2"><i class="fa fa-times text-danger mr-2"></i>✅   บริการอาบน้ำ & ตัดขน</li>
                            <li class="list-group-item p-2"><i class="fa fa-times text-danger mr-2"></i>❌   บริการรับ-ส่งสัตว์เลี้ยงถึงหน้าบ้าน(ไม่เกิน 20 กม.)</li>
                        </ul>
                    </div>
                    <div class="card-footer border-0 p-0">
                        <a href="#" class="btn btn-secondary btn-block p-3" style="background-color: #EE9322; border-radius: 10px; width: 100%; margin-top: 46px; font-size: 24px;">จองห้องเลย!</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mb-4">
                <div class="card border-0">
                    <div class="card-header position-relative border-0 p-0 mb-4">
                        <img class="card-img-top" src="img/lynx01.png" alt="">
                        <div class="position-absolute d-flex flex-column align-items-center justify-content-center w-100 h-100" style="top: 0; left: 0; z-index: 1; background: rgba(0, 0, 0, .5);">
                            <h3 style="color: #D83F31;">Exotic</h3>
                            <h1 class="display-4 text-white mb-0">
                                <small class="align-top" style="font-size: 22px; line-height: 45px;">฿</small>669<small class="align-bottom" style="font-size: 16px; line-height: 40px;">/ วัน</small>
                            </h1>
                        </div>
                    </div>
                    <div class="card-body text-center p-0">
                        <ul style="text-align: left;" class="list-group list-group-flush mb-4">
                            <li class="list-group-item p-2"><i class="fa fa-check text-secondary mr-2"></i>✅  การให้ขนม/อาหารเสริมระหว่างวัน</li>
                            <li class="list-group-item p-2"><i class="fa fa-check text-secondary mr-2"></i>✅   รองรับแมวหรือสุนัขจำนวนสูงสุด 4 ตัว</li>
                            <li class="list-group-item p-2"><i class="fa fa-times text-danger mr-2"></i>✅   กล้องสำหรับการดูเหล่าสัตว์เลี้ยง</li>
                            <li class="list-group-item p-2"><i class="fa fa-times text-danger mr-2"></i>✅ ติดต่อพี่เลี้ยงได้ตลอด 24 ชั่วโมง</li>
                            <li class="list-group-item p-2"><i class="fa fa-times text-danger mr-2"></i>✅   ปรึกษาสัตว์แพทย์ฟรี</li>
                            <li class="list-group-item p-2"><i class="fa fa-times text-danger mr-2"></i>✅   บริการอาบน้ำ & ตัดขน</li>
                            <li class="list-group-item p-2"><i class="fa fa-times text-danger mr-2"></i>✅   บริการรับ-ส่งสัตว์เลี้ยงถึงหน้าบ้าน(ไม่เกิน 20 กม.)</li>
                            <li class="list-group-item p-2"><i class="fa fa-times text-danger mr-2"></i>✅   อาหารสำหรับ Exotic Pets โดยเฉพาะ</li>
                        </ul>
                    </div>
                    <div class="card-footer border-0 p-0">
                        <a href="#" class="btn btn-primary btn-block p-3" style="background-color: #D83F31; border-radius: 10px; width: 100%; font-size: 24px;">จองห้องเลย!</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>





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
</body>
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
</html>