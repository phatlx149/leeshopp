<?php
if (isset($_SESSION['kiemtra']) && (is_array($_SESSION['kiemtra']))) {
    extract($_SESSION['kiemtra']);
}
if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
    $username = $_POST['username'];
    $emailKH = $_POST['emailKH'];
    $vaitroKH = $_POST['vaitroKH'];
    $idUser = $_POST['idUser'];
    khachhang_update($username, $emailKH, $idUser);
    $_SESSION['kiemtra'] = khachhang_checklogin($username, $pass);
    echo '<script>alert("Cập nhật thành công, vui lòng đăng nhập lại"); window.location="?logout=dangxuat";</script>';
}

?>
<div class="container1">
    <h1>Thông tin cá nhân</h1>
    <form method="post">
        <div class="form-group">
            <label class="text1" for="">ID khách hàng</label>
            <input type="text" name="idKH" placeholder="Auto" disabled>
        </div>
        <div class="form-group">
            <label class="text1" for="">Username</label>
            <input type="text" name="username" value="<?= $username ?>">
        </div>
       


        <div class="form-group">
            <label class="text1" for="">Email</label>
            <input type="text" name="emailKH" value="<?= $email ?>">
        </div>
        <div class="form-group">
            <label class="text1" for="">Vai trò</label>
            <input type="text" name="vaitroKH" value="<?= ($vaiTro == 1) ? "Admin" : "Khách hàng" ?>" disabled>
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