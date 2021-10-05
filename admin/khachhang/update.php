<?php
if (is_array($editkh)) {
    extract($editkh);
}
?>

<div class="container1">
    <h1>Cập nhật tài khoản</h1>
    <form action="index.php?page=updatekh" method="post">
        <div class="form-group">
            <label class="text1" for="">ID khách hàng</label>
            <input type="text" name="idKH" placeholder="Auto" disabled>
        </div>
        <div class="form-group">
            <label class="text1" for="">Username</label>
            <input type="text" name="username" value="<?= $username ?>">
        </div>
        <div class="form-group">
            <label class="text1" for="">Password</label>
            <input type="text" name="passKH" value="<?= $pass ?>">
        </div>


        <div class="form-group">
            <label class="text1" for="">Email</label>
            <input type="text" name="emailKH" value="<?= $email ?>">
        </div>
        <div class="form-group">
            <label class="text1" for="">Vai trò</label>
            <input type="text" name="vaitroKH" value="<?= $vaiTro ?>" disabled>
        </div>
        <div class="form-group">
            <input type="hidden" name="idUser" value="<?php if (isset($idUser) && ($idUser) > 0) echo $idUser ?>">
            <input type="submit" value="Cập nhật" name="capnhat">
            <input type="reset" value="Nhập lại">
            <a href="index.php?listkh"><input type="button" value="DANH SÁCH KHÁCH HÀNG"></a>
        </div>
        <?php
        if (isset($thongbao) && ($thongbao != "")) {
            echo $thongbao;
        }
        ?>
    </form>
</div>