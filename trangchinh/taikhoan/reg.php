<?php
if (isset($_POST['page']) && $_POST['page']) {
    $username = $_POST['user'];
    $pass = $_POST['pass'];
    $repass = $_POST['repass'];
    $email = $_POST['email'];
    $kiemtra = khachhang_checkreg($username, $email);
    if (strlen($username)  < 7) {
        $thongbao = "username phải hơn 6 kí tự";
    } else if ($kiemtra) {
        $thongbao = "username hoặc email đã tồn tại";
    } else if (strlen($pass) < 7) {
        $thongbao = "password phải hơn 6 kí tự";
    } else if ($pass != $repass) {
        $thongbao = "Mật khẩu xác thực không đúng";
    } else {
        khachhang_insert($username, $pass,  $email);
        $thongbao = "Tạo tài khoản thành công";
    }
}
?>
<h1 class="login">Đăng ký</h1>
<form class="form-login" method="POST">
    <div class="form-group">
        <input type="text" name="user" required placeholder="Username">
    </div>
    <div class="form-group">
        <input type="password" name="pass" required placeholder="Password">
    </div>
    <div class="form-group">
        <input type="password" name="repass" required placeholder="Confirm password">
    </div>
    <div class="form-group">
        <input type="email" name="email" required placeholder="Youremail@domain.com">
    </div>

    <div class="button-submit">
        <input type="hidden" name="page" value="reg">
        <button type="submit">Đăng ký</button>

    </div>
    <?php echo $thongbao ?>
</form>