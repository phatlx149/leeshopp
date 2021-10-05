<?php
$idSanPham = 0;
if (isset($_GET['idSanPham'])) $idSanPham = $_GET['idSanPham'];
settype($idSanPham, "int");
$chitiet = layChiTietTin($idSanPham);
tangSoLanXem($idSanPham);
?>
<div class="box-ctsp">
    <?php extract($chitiet); ?>
    <div class="duongdan">
        <i class="fas fa-home"></i>

        <p> <?= $tenSanPham ?></p>

    </div>
    <div class="box-imgsp">
        <div class="img-sp">
            <img src="../<?= $urlHinh ?>" alt="">
        </div>

    </div>
    <div class="box-textsp">
        <div class="name-item">
            <div class="text-item">Tốt</div>
            <h3><?= $tenSanPham ?></h3>
        </div>
        <div class="soLuotXem">
            <i class="fas fa-eye"></i><span>Lượt xem: <?= $soLuotXem ?></span>
        </div>
        <div class="danhgia">
            <p>1 <i>Đánh Giá</i></p>
            <p>12 <i>Đã Bán</i></p>
        </div>
        <div class="price-item">
            <!-- <del>330.000đ</del> -->
            <p>Giá: <?= number_format($donGia) ?>đ</p>
        </div>
        <div class="quantity">
            <input type="number" min="1" max="999">
        </div>
        <div class="buy">

            <button type="submit">Mua ngay</button>
            <button type="submit">Thêm vào giỏ hàng</button>
            </form>
        </div>
    </div>
    <div class="des-sp">
        <div class="motaa">
            <div class="text-mota">
                <p>Mô tả sản phẩm</p>
            </div>
            <div class="mota">
                <p><?= nl2br($contentSanPham) ?></p>
            </div>
        </div>
        <div class="cung-sp">
            <div class="text_cung-sp">
                <p>Sản phẩm cùng loại</p>
            </div>
            <div class="list-item-cungloai">

                <?php $listspcl = sanpham_cungloai($idHangHoa, $idSanPham) ?>
                <?php foreach ($listspcl as $listcungloai) { ?>
                    <div class="box-item-cungloai">
                        <div class="img">
                            <a href="?page=chitietsp&idSanPham=<?= $listcungloai['idSanPham'] ?>"><img src="../<?= $listcungloai['urlHinh'] ?>" alt=""></a>
                        </div>
                        <div class="text">
                            <a href="?page=chitietsp&idSanPham="><?= $listcungloai['tenSanPham'] ?></a>
                        </div>

                        <div class="price">
                            <p>Giá: <?= number_format($listcungloai['donGia']) ?>đ</p>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>

</div>
