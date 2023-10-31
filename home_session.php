<?php
    require 'dbconn.php';
    session_start();
if (isset($_SESSION['username'])) {
    $username = $_SESSION['username'];

    $sql = "SELECT * FROM owner WHERE owner_username = '$username'";
    $result = $conn->query($sql);
    
    if(!$result){
        die("Error : ". $conn->$conn_error);
    }

}
  

?>

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
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="meowjs.js"></script>
    

</head>
<body>

<!--------------------------  Navigation Bar  ---------------------------------->

    <nav>
        <a id="MeowVilla" href="home_session.php"><img src="img/PetVilla_Logo.png" alt=""></a>       
        <a href="reservation.php">จองห้องพักสัตว์เลี้ยง</a>
        <a href="#">แอบส่องน้องๆ</a>
        <a href="employee_chat.php">ติดต่อพี่เลี้ยง</a>
        <a href="#">เกี่ยวกับเรา</a>

        <div style="position: absolute; font-size: 18px; right: 20%; bottom: 86%; background-color:#0f645b; color: white; border-radius: 5px; padding-top: 27px; padding-left: 15px; padding-right: 0px; text-align: center;">
            <img style="margin-right: 210px; margin-bottom:-41px; width: 28px; height: 28px;" src="img/user_icon01.png" alt="">
            
            <?php
                    if ($result->num_rows > 0) {
                        while($row = $result->fetch_assoc()) {
                            echo "<p>".$row['owner_name']."</p>";  
                        }
                    }else {
                        echo "0 results";
                    }
                    $conn->close();
                ?>
            
              
        </div>
                       
        
        <a href="index.php" id="loginbtn" class="logout">ออกจากระบบ</a>


    </nav>
    <div class="bottom-stroke">
        <br>
    </div>

<!------------------  First Page  ------------------------>

    <img id="cat_peek" src="img/cat_peek.png" alt="cat_peek">
    <img id="dog_peek" src="img/dog_peek.png" alt="dog_peek">
    <div class="mainobject">
        <img id="mainobject-pic" src="mbg01.jpg">
        <div class="overlay">
            <h1>PetVilla</h1><br>
            <p>โรงแรมสำหรับสัตว์เลี้ยง ดูแลอย่างดี ปลอดภัย ได้มาตรฐาน เอาใจเหล่าทาสทั้งหลายที่ติดภารกิจสำคัญ</p>
            <p>ทางเรา PetVilla พร้อมให้บริการดูแลเหล่าเจ้านาย และมีบริการอื่นๆอีกมากมาย</p>
            <p>เรามีพื้นที่ให้แมวและสุนัขได้เล่นและสำรวจ พร้อมพื้นที่พักส่วนตัวที่สะอาดและสบายเหมือนอยู่บ้าน!</p>
            <p>PetVilla พร้อมที่จะดูแลสัตวเลี้ยงของคุณ ให้คุณมีสมาธิในภารกิจสำคัญของคุณ!</p><br>
            <a class="btn btn-warning rounded-pill px-3" href="#"> 🐾 จองเลย 🐾</a>
        </div>
        <div class = "minipic01">
            <img src="img/minipic1.jpg" alt="">
            <img src="img/minipic2.jpg" alt="">
            <img src="img/minipic3.jpg" alt="">
            <img src="img/minipic4.jpg" alt="">
            <img src="img/minipic5.jpg" alt="">
        </div>
    </div>
    <div class="doubleobj">
        <img src="mbg02.jpg" alt="">
        <div class="overlay-2">
            <p>รองรับน้องเหมียวไซส์ใหญ่</p>
            <p>Exotic Cat ก็ไม่ใช่ปัญหา</p>
        </div>
        <img src="mbg03.jpg" alt="">
        <div class="overlay-3">
            <p>ร่วมเป็นหนึ่งในครอบครัวเรา</p>
            <p>PetVilla พร้อมให้การดูแล</p>
        </div>
        
    </div>

<!--------------------------- Services ---------------------------------------->

    <div class="container py-5" id="services">
        <div class="d-flex flex-column text-center mb-5">
            <h4 class="text-secondary mb-3">Our Services</h4>
            <h1 class="display-4 m-0"><span class="text-primary">Premium</span> Pet Services</h1>
        </div>
        <div class="row pb-3">
            <div class="col-md-6 col-lg-4 mb-4">
                <div class="d-flex flex-column text-center bg-white mb-2 p-3 p-sm-5">
                    <img src="img/pet-hotel.png" alt="">
                    <h3 class="mb-3">Pet Hotel</h3>
                    <p>นี่ไม่ใช่เพียงแค่สถานที่พักผ่อน แต่เป็นบ้านสำหรับความประทับใจและสมหวังของสัตว์เลี้ยงของคุณ ที่นี่เราไม่เพียงเป็นผู้ดูแล แต่เราเป็นครอบครัวที่รักและดูแลพวกเขาเหมือนลูกหรือลูกหลานของเราเอง มาพักผ่อนและแบ่งประสบการณ์ที่ PetVilla</p>
                    <a class="text-uppercase font-weight-bold" href="#">Read More</a>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 mb-4">
                <div class="d-flex flex-column text-center bg-white mb-2 p-3 p-sm-5">
                    <img src="img/cat.png" alt="">
                    <h3 class="mb-3">Pet Feeding</h3>
                    <p>ทางเรามีอาหารสัตว์คุณภาพดี ปลอดภัย ได้มาตรฐาน สามารถปรับการให้อาหารน้องๆที่มีโรคประจำตัวได้ เรายินดีที่จะเป็นส่วนหนึ่งในการสร้างความสุขและประทับใจในการให้อาหารสัตว์เลี้ยงของคุณทุกวัน </p>
                    <a class="text-uppercase font-weight-bold" href="#">Read More</a>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 mb-4">
                <div class="d-flex flex-column text-center bg-white mb-2 p-3 p-sm-5">
                    <img src="img/dog01.png" alt="">
                    <h3 class="mb-3">Pet Grooming</h3>
                    <p>ของเราไม่ใช่เพียงการเรียงขนและตัดเล็บ แต่เป็นการสร้างประสบการณ์ที่ผ่อนคลายและน่ารักที่ทำให้สัตว์เลี้ยงของคุณรู้สึกดีที่สุด มุ่งเน้นที่จะทำให้สุนัขและแมวของคุณรู้สึกสบายและมีความสุข</p>
                    <a class="text-uppercase font-weight-bold" href="#">Read More</a>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 mb-4">
                <div class="d-flex flex-column text-center bg-white mb-2 p-3 p-sm-5">
                    <img src="img/trainer.png" alt="">
                    <h3 class="mb-3">Pet Training</h3>
                    <p>ช่วยให้พวกเขาเรียนรู้ทักษะใหม่ๆ และพัฒนาพฤติกรรมที่ดีเพื่อความสุขและความสามารถในชีวิตประจำวันของพวกเขา และเราเชื่อในการสร้างความเข้าใจและความสุขที่แท้จริงสำหรับสัตว์เลี้ยงของคุณ</p>
                    <a class="text-uppercase font-weight-bold" href="#">Read More</a>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 mb-4">
                <div class="d-flex flex-column text-center bg-white mb-2 p-3 p-sm-5">
                    <img src="img/dog02.png" alt="">
                    <h3 class="mb-3">Pet Exercise</h3>
                    <p>เราเชื่อว่าการออกกำลังกายเป็นเวลาที่สัตว์เลี้ยงของคุณสามารถสร้างความทรงจำและความสุขที่ได้รับจากกิจกรรมที่ทำร่วมกัน ที่นี่เราไม่เพียงแค่สนุก แต่เรายังสร้างการสรรสร้างความแข็งแรงและส่งเสริมความเชื่อใจร่วมกัน</p>
                    <a class="text-uppercase font-weight-bold" href="#">Read More</a>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 mb-4">
                <div class="d-flex flex-column text-center bg-white mb-2 p-3 p-sm-5">
                    <img src="img/veterinarian.png" alt="">
                    <h3 class="mb-3">Pet Treatment</h3>
                    <p>บริการตรวจสุขภาพกับพี่ๆสัตว์แพทย์ ไม่ต้องไปโรงพยาบาลสัตว์ด้วยตัวเองให้เสียเวลา สามารถใช้พื้นที่ของเราพักฟื้นได้หากสัตว์เลี้ยงของท่านไม่สบาย</p>
                    <a class="text-uppercase font-weight-bold" href="#">Read More</a>
                </div>
            </div>
        </div>
    </div>
<!------------------------------- Price Package ----------------------------------->

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
                        <a href="booking.php" class="btn btn-primary btn-block p-3" style="background-color: #219C90; border-radius: 10px; width: 100%; margin-top: 46px; font-size: 24px;">จองห้องเลย!</a>
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
                        <a href="booking.php" class="btn btn-secondary btn-block p-3" style="background-color: #EE9322; border-radius: 10px; width: 100%; margin-top: 46px; font-size: 24px;">จองห้องเลย!</a>
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
                        <a href="booking.php" class="btn btn-primary btn-block p-3" style="background-color: #D83F31; border-radius: 10px; width: 100%; font-size: 24px;">จองห้องเลย!</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
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