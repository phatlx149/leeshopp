<?php
if (isset($_GET['idHangHoa'])) $idHangHoa = $_GET['idHangHoa'];
settype($idHangHoa, "int");



$sanpham = danhmucSP($idHangHoa);
$tenSP = hanghoa_layTen($idHangHoa);


?>
<div class="text-topsp">
    <!-- Phân trang -->

    <!-- Kết thúc -->
    <div class="duongdan">
        <i class="fas fa-home"></i>

        <p><?= $tenSP ?></p>
    </div>
</div>
<div class="list-item">
    <?php foreach ($sanpham as $sanphamtrongloai) { ?>
        <div class="box-sp">
            <div class="img">
                <a href="?page=chitietsp&idSanPham=<?= $sanphamtrongloai['idSanPham'] ?>">
                    <img src="../<?= $sanphamtrongloai['urlHinh'] ?>" alt="" /></a>
            </div>
            <div class="text_name-item">
                <a href="?page=chitietsp&idSanPham=<?= $sanphamtrongloai['idSanPham'] ?>">
                    <p><?= $sanphamtrongloai['tenSanPham'] ?></p>
                </a>

            </div>
            <div class="text-price">
                <p>Giá: <?= number_format($sanphamtrongloai['donGia']) ?>đ</p>
                <p style="color: #dedede"></p>
            </div>
        </div>
    <?php } ?>
</div>
<div class="phantrang">

</div>