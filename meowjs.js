document.addEventListener('DOMContentLoaded', function () {
    const loginForm = document.getElementById('login-form');

    loginForm.addEventListener('submit', function (e) {
        e.preventDefault();
        
        const username = loginForm.elements.username.value;
        const password = loginForm.elements.password.value;

        // ส่งข้อมูลไปยังไฟล์ PHP ที่สร้างข้างต้น
        fetch('check_login.php', {
            method: 'POST',
            body: new URLSearchParams({
                'username': username,
                'password': password
            }),
            headers: {
                'Content-Type': 'application/x-www-form-urlencoded',
            }
        })
        .then(response => response.text())
        .then(data => {
            if (data === 'error') {
                // ถ้าข้อมูลไม่ตรงกัน
                Swal.fire({
                    icon: 'error',
                    title: 'เกิดข้อผิดพลาด',
                    text: 'ชื่อผู้ใช้หรือรหัสผ่านไม่ถูกต้อง',
                });
            } else {
                // ถ้าข้อมูลถูกต้อง
                loginForm.submit(); // ทำการ submit แบบปกติ
            }
        });
    });
});



