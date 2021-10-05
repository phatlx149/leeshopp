<div class="box-lienhe">

    <div style="width:49%" class="thongtin">
        <i class="fas fa-user-tie"></i>
        <?php if (isset($_SESSION['kiemtra'])) {
            extract($_SESSION['kiemtra']) ?>
            <span>Admin: <?= $username ?></span>
        <?php } ?>
    </div>
</div>
<div class="box_login-reg">
    <div class="box-login">
        <a href="../../index.php">Trở lại</a>
    </div>
</div>