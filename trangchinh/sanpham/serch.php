<?php

if (isset($_GET['page'])) {
    $key = $_GET['key'];
    $key_s = "%" . $key . "%";
}
$keywordsp = sanpham_keyserch($key_s);


?>
<p>Từ khoá mà bạn đã tìm kiếm: <?= $_GET['key'] ?></p>
<div class="list-item">
    <?php foreach ($keywordsp as $timkiemsp) { ?>
        <div class="box-sp">
            <div class="img">
                <a href="index.php?page=chitietsp&idSanPham=<?= $timkiemsp['idSanPham'] ?>">
                    <img src="../<?= $timkiemsp['urlHinh'] ?>" alt="" /></a>
            </div>
            <div class="text_name-item">
                <a href="index.php?page=chitietsp&idSanPham=">
                    <p><?= $timkiemsp['tenSanPham'] ?></p>
                </a>

            </div>
            <div class="text-price">
                <p>Giá: <?= number_format($timkiemsp['donGia']) ?>đ</p>
                <p style="color: #dedede"></p>
            </div>
        </div>
    <?php } ?>
</div>