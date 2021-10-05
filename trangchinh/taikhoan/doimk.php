<?php
if (!isset($_SESSION['kiemtra'])) {
    echo '<script>alert("Bạn chưa đăng nhập, vui lòng đăng nhập"); window.location="../index.php";</script>';
}
if (isset($_POST['capnhat'])) {
    $passKH = $_POST['passKH'];
    $passNew = $_POST['passNew'];
    $passNew1 = $_POST['passNew1'];
    if ($_SESSION['kiemtra']['pass'] != $passKH) {
        echo "<span> Sai mật khẩu cũ </span>";
    } else if (strlen($passNew) < 7) {
        echo "<span>Mật khẩu mới không được dưới 6 kí tự</span>";
    } else if ($passNew != $passNew1) {
        echo "<span>Mật khẩu mới xác thực không trùng khớp</span>";
    } else {
        $checkmk = khachhang_checkdoimat($username, $passKH);
        if (!$checkmk) {
            echo "<span>Mật khẩu bạn nhập hệ thống không có</span>";
        }
        khachhang_update_matkhau($passNew, $idUser);
        echo '<script>alert("Cập nhật thành công, vui lòng đăng nhập lại"); window.location="?logout=dangxuat";</script>';
    }
}

?>
<div class="container1">
    <h1>Đổi mật khẩu</h1>
    <form method="post">

        <div class="form-group">
            <label class="text1" for="">Mật khẩu cũ</label>
            <input type="text" name="passKH" value="">
        </div>
        <div class="form-group">
            <label class="text1" for="">Mật khẩu mới</label>
            <input type="text" name="passNew" value="">
        </div>
        <div class="form-group">
            <label class="text1" for="">Xác thực mật khẩu mới</label>
            <input type="text" name="passNew1" value="">
        </div>
        <div class="form-group">
            <input type="hidden" name="idUser" value="<?php if (isset($idUser) && ($idUser) > 0) echo $idUser ?>">
            <input type="submit" value="Cập nhật" name="capnhat">
            <input type="reset" value="Nhập lại">
        </div>
        <?php
        if (isset($thongbao) && ($thongbao != "")) {
            echo $thongbao;
        }
        ?>
    </form>
</div>