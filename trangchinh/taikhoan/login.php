<?php
if (isset($_POST['page']) && ($_POST['page'])) {
    $username = $_POST['username'];
    $pass = $_POST['pass'];
    $kiemtra = khachhang_checklogin($username, $pass);
    if (is_array($kiemtra)) {
        $_SESSION['kiemtra'] = $kiemtra;
        echo '<script>alert("Bạn đã đăng nhập thành công"); window.location="../trangchinh/";</script>';
       
    } else {
        $thongbao = "Nhập sai username hoặc password, vui lòng nhập lại";
    }
}

?>
<h1 class="login">Đăng nhập</h1>
<div class="mxh">
    <div class="mxh1">
        <a href=""><i class="fab fa-facebook-f"></i><span class="mang-xh">Đăng nhập bằng Facebook</span></a>
    </div>
    <div class="mxh1">
        <a href=""><i class="fab fa-google"></i><span class="mang-xh">Đăng nhập bằng Google</span></a>
    </div>
    <div class="mxh1">
        <a href=""><i class="fab fa-twitter"></i><span class="mang-xh">Đăng nhập bằng Twitter</span></a>
    </div>
</div>
<form class="form-login" method="post">

    <div class="form-group">
        <input type="text" name="username" placeholder="Username" value="">
    </div>
    <div class="form-group">
        <input type="password" name="pass" placeholder="Password" value="">
    </div>
    <div class="check-box">
        <input name="remember" style="display:block" type="checkbox">
        <span class="remember">Remember me?</span>
    </div>
    <div class="button-submit">
        <input type="hidden" name="page" value="login">
        <button type="submit">Đăng nhập</button>
    </div>
</form>
<?php echo "<p style='text-align:center; color:red'> $thongbao </p>" ?>