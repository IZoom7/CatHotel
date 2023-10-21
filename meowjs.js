document.addEventListener('DOMContentLoaded', function () {
    const loginForm = document.getElementById('login-form');

    loginForm.addEventListener('submit', function (e) {
        e.preventDefault();
        
        const username = loginForm.elements.username.value;
        const password = loginForm.elements.password.value;

        if (!username || !password) {
            Swal.fire({
                icon: 'error',
                title: 'เกิดข้อผิดพลาด',
                text: 'กรุณากรอกชื่อผู้ใช้และรหัสผ่าน',
            });
        } else {
            // ทำการ submit แบบปกติ
            loginForm.submit();
        }
    });
});