<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <!--<meta name="viewport" content="width=device-width, initial-scale=1.0">-->
    <title>PetVilla Register</title>
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
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@10/dist/sweetalert2.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10/dist/sweetalert2.all.min.js"></script>



</head>

<body class="loginmenu">
    <nav>
        <a id="MeowVilla" href="index.php"><img src="img/PetVilla_Logo.png" alt=""></a>
        <a href="#">จองห้องพักสัตว์เลี้ยง</a>
        <a href="#">แอบส่องน้องๆ</a>
        <a href="#">ติดต่อพี่เลี้ยง</a>
        <a href="#">เกี่ยวกับเรา</a>
        <!-- <a id="loginbtn" href="#">เข้าสู่ระบบ</a>> -->
    </nav>
    <div class="bottom-stroke">
        <br>
    </div>
    <div style="margin-bottom: 70px; margin-top: 130px;" class="login-bar">
        <h4>ลงทะเบียน (สำหรับพนักงาน)</h4>
        <br>
        <img style="width: 210px; height: 130px; position: absolute; bottom: 57.2%; right: 55%;"
            src="img/dog_peek02.png" alt="">
        <form action="emp_register_success.php" method="post" id="login-form">

            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">ชื่อผู้สมัคร</span>
                <input type="text" class="form-control" placeholder="กรุณากรอกชื่อผู้สมัคร"
                    aria-label="กรุณากรอกชื่อผู้สมัคร" aria-describedby="basic-addon1" name="emp_name"
                    autocomplete="off">
            </div>

            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">นามสกุลผู้สมัคร</span>
                <input type="text" class="form-control" placeholder="กรุณากรอกนามสกุลผู้สมัคร"
                    aria-label="กรุณากรอกนามสกุลผู้สมัคร" aria-describedby="basic-addon1" name="emp_lastname"
                    autocomplete="off">
            </div>

            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Email</span>
                <input type="text" class="form-control" placeholder="กรุณากรอกEmail" aria-label="กรุณากรอกEmail"
                    aria-describedby="basic-addon1" name="emp_email">
            </div>

            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">เบอร์โทรศัพท์</span>
                <input type="text" class="form-control" placeholder="กรุณากรอกเบอร์โทรศัพท์"
                    aria-label="กรุณากรอกเบอร์โทรศัพท์" aria-describedby="basic-addon1" name="emp_phone">
            </div>

            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">ที่อยู่</span>
                <input type="text" class="form-control" placeholder="กรุณากรอกที่อยู่" aria-label="กรุณากรอกที่อยู่"
                    aria-describedby="basic-addon1" name="emp_address">
            </div>

            <div class="d-flex" style="width: 100%;">
                <div class="input-group mb-3">
                    <select style="margin-right: 20px;" class="form-select" aria-label="Choose Your headquarter"
                        name="headquarter_id">
                        <option selected>สาขาที่ต้องการทำงาน</option>
                        <option value="901">ดอนเมือง</option>
                        <option value="902">สนามบินสุวรรณภูมิ</option>
                        <option value="903">หมอชิต</option>
                        <option value="904">โคกอีเลิ้งซิตี้</option>
                    </select>
                </div>
            </div>

            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">เอกสารสำหรับการสมัคร</span>
                <input type="file" class="form-control" name="emp_doc" accept="All Files/*" required>
            </div>


            <input style="margin-right: 15px;" class="btn btn-success" type="submit" value="สมัครพนักงาน">
            <a style="margin-right: 150px;" class="btn btn-secondary" href="login.php">กลับไปยังเข้าสู่ระบบ</a><br><br>
            <a style="margin-right: 150px;" class="btn btn-secondary" href="register.php">ลงทะเบียนสำหรับลูกค้า</a>
        </form>
    </div>







</body>

</html>