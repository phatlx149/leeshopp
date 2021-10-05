<?php
if (isset($_GET['logout'])) {
  unset($_SESSION['kiemtra']);
  echo '<script>alert("Bạn đã đăng xuất"); window.location="../trangchinh/";</script>';
}


?>
<div class="box-lienhe">
  <div class="thongtin">
    <i class="fas fa-envelope"></i>
    <a href="mailto:admin@fpt.edu.vn">leeshop@gmail.com</a>
  </div>
  <div class="thongtin">
    <i class="fas fa-mobile-alt"></i>
    <a href="tel:+84783635341">0783.6353.341</a>
  </div>
</div>
<div class="box_login-reg">
  <?php if (isset($_SESSION['kiemtra'])) {
    extract($_SESSION['kiemtra']); ?>
    <div class="box-login">
      <i class="fas fa-user-tie"></i>
      <span style="color: #fff;"><?= $username ?></span>
      <input type="checkbox" class="check-qtv" id="check-qtv" hidden>
      <label for="check-qtv" id="click" style="padding-bottom: 6px;cursor: pointer;" class="fas fa-sort-down"></label>
      <ul class="menu-tk">
        <li><a href="?page=thongtincanhan">Thông tin tài khoản</a></li>
        <li><a href="?page=doimk">Đổi mật khẩu</a></li>
        <?php if ($_SESSION['kiemtra']['vaiTro'] == 1) { ?>
          <li><a href="<?= $ADMIN_URL ?>/trangchinh">Quản trị Web</a></li>
        <?php } ?>
        <li><a href="?logout=dangxuat">Thoát</a></li>
      </ul>


    </div>

  <?php } else { ?>
    <div class="box-login">
      <i class="fas fa-user-tie"></i>
      <a href="?page=login">Đăng nhập</a>
      <a href="?page=reg">Đăng ký</a>
    </div>
  <?php } ?>
</div>