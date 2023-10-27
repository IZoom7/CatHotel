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

    

</head>
<body>

<!--------------------------  Navigation Bar  ---------------------------------->

<nav>
        <a id="MeowVilla" href="home_session.php"><img src="img/PetVilla_Logo.png" alt=""></a>       
        <a href="insert_pets.html">จองห้องพักสัตว์เลี้ยง</a>
        <a href="#">แอบส่องน้องๆ</a>
        <a href="employee_chat.php">ติดต่อพี่เลี้ยง</a>
        <a href="#">เกี่ยวกับเรา</a>

        <div style="position: absolute; font-size: 18px; right: 20%; bottom: 86%; background-color:#0f645b; color: white; border-radius: 30px; padding-top: 10px; padding-left: 15px; padding-right: 0px; text-align: center;">
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
                       
        
        <a href="index.html" id="loginbtn" class="logout">ออกจากระบบ</a>


    </nav>
    <div class="bottom-stroke">
        <br>
    </div>

<!------------------  First Page  ------------------------>
        
<div class="container-fluid bg-light pt-5 pb-4">
        <div class="row">
            <div class="col-lg-4 mb-4">
                <div class="card border-0">
                    <div class="card-header position-relative border-0 p-0 mb-4">
                        <img class="card-img-top" src="img/cat02.jpg" alt="">
                        <div class="position-absolute d-flex flex-column align-items-center justify-content-center w-100 h-100" style="top: 0; left: -0; z-index: 1;">                      
                    </div>
                    </div>
                    <h1>Mr.Pakkatorn Pommin</h1>
                    <h1> 📞063-383-6611</h1>
                    <div class="card-footer border-0 p-0">
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mb-4">
                <div class="card border-0">
                    <div class="card-header position-relative border-0 p-0 mb-4">
                        <img class="card-img-top" src="img/husky01.jpg" alt="">
                        <div class="position-absolute d-flex flex-column align-items-center justify-content-center w-100 h-100" style="top: 0; left: -0; z-index: 1;">                      
                    </div>
                    </div>
                    <h1>Mr.Pitipong Prasirtsak</h1>
                    <h1> 📞063-383-6611</h1>
                    <div class="card-footer border-0 p-0">
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mb-4">
                <div class="card border-0">
                    <div class="card-header position-relative border-0 p-0 mb-4">
                        <img class="card-img-top" src="img/lynx01.png" alt="">
                        <div class="position-absolute d-flex flex-column align-items-center justify-content-center w-100 h-100" style="top: 0; left: 0; z-index: 1;">
                    </div>
                    </div>
                <h1>Mr.Sawettachat Kasemyart</h1>
                    <h1> 📞063-383-6611</h1>
                    <div class="card-footer border-0 p-0">        
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
        window.location.href = 'index.html'; // นำทางไปยังหน้า index.html หรืออีกหน้าที่คุณต้องการ
      }
    });
  });
});

</script>
</body>
</html>