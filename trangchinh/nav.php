<label for="nav-moblie" class="nav_bars-btn">
    <i style="color: #fff;" class="fas fa-bars"></i>
</label>
<input type="checkbox" hidden class="nav_input" id="nav-moblie">
<label for="nav-moblie" class="nav_overplay"></label>
<div class="menu_molie">
    <label for="nav-moblie" class="nav_close">
        <i style="color: #fff;" class="fas fa-times"></i>
    </label>
    <ul class="vmenu_molie">

        <li><a href="index.php">Bán chạy</a></li>
        <?php $theloaihh_layTen = theLoai() ?>
        <?php foreach ($theloaihh_layTen as $menucha) { ?>
            <li>
                <?= $menucha['tenLoaihanghoa'] ?>
                <ul class="amenu_molie">
                    <?php $menu1 = layMenuCon($menucha['idTLhanghoa']) ?>
                    <?php foreach ($menu1 as $menucon) { ?>
                        <li>&#187;
                            <a href="index.php?page=loai&idHangHoa=<?= $menucon['idHangHoa'] ?>"><?= $menucon['tenHangHoa'] ?></a>
                        </li>
                    <?php } ?>
                </ul>
            </li>
        <?php } ?>
        <li><a href="index.php">Chính sách</a></li>

    </ul>
</div>
<div class="urlHinh">
    <div class="logo">
        <a href="../trangchinh/"><img src="../content/img/LOGO1.png" alt="" /></a>
    </div>
</div>
<div class="menu">
    <ul class="vmenu">

        <li><a href="../trangchinh/">Bán chạy</a></li>
        <?php $theloaihh_layTen = theLoai() ?>
        <?php foreach ($theloaihh_layTen as $menucha) { ?>
            <li>
                <a href="../trangchinh/"><?= $menucha['tenLoaihanghoa'] ?></a>
                <ul class="amenu">
                    <?php $menu1 = layMenuCon($menucha['idTLhanghoa']) ?>
                    <?php foreach ($menu1 as $menucon) { ?>
                        <li>
                            <a href="?page=loai&idHangHoa=<?= $menucon['idHangHoa'] ?>"><?= $menucon['tenHangHoa'] ?></a>
                        </li>
                    <?php } ?>
                </ul>
            </li>
        <?php } ?>
        <li><a href="../trangchinh/">Chính sách</a></li>

    </ul>
</div>
<form action="" method="GET" class="form-timkiem">
    <input type="hidden" name="page" value="timkiem">
    <input type="text" placeholder="Áo thun..." name="key" required value="<?= $_GET['key'] ?>" />
    <button type="submit">Tìm kiếm</button>
    <button type="submit" hidden class="button-moblie"><i class="fas fa-search"></i></button>
</form>