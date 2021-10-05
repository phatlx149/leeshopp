<?php
if (isset($_POST['addcart'])) {
    $idSanPham = $_POST['idSanPham'];
    $tenSanPham = $_POST['tenSanPham'];
    $urlHinh = $_POST['urlHinh'];
    $donGia = $_POST['donGia'];
    $soluong = 1;
    $tong = $soluong * $donGia;
    $cartadd = [$idSanPham, $tenSanPham, $urlHinh,  $soluong, $donGia, $tong];
    array_push($_SESSION['cart'], $cartadd);
    $_SESSION['cart'];
}

?>
<div class="container-cart">
    <div class="info-user">
        <form class="form-cart" action="" method="post">
            <fieldset>
                <legend>Thông tin người nhận hàng</legend>
                <div class="form-input">
                    <label for="">Họ và tên</label>
                    <input class="cart-input" type="text">
                </div>
                <div class="form-input">
                    <label for="">Địa chỉ</label>
                    <input class="cart-input" type="text">
                </div>
                <div class="form-input">
                    <label for="">Số điện thoại</label>
                    <input class="cart-input" type="text">
                </div>
                <div class="form-input">
                    <label for="">Ghi chú</label>
                    <textarea name="" id="" cols="30" rows="10"></textarea>
                </div>
            </fieldset>
        </form>
    </div>
    <div class="info-cart">
        <table border="1">
            <tr>
                <th>ID sản phẩm</th>
                <th>Tên sản phẩm</th>
                <th>Hình ảnh</th>
                <th>Số lượng</th>
                <th>Giá</th>
                <th>Tổng tiền</th>
            </tr>
            <?php
            $tong = 0;
            foreach ($_SESSION['cart'] as $cart) {
                $ttien = $cart[3] * $cart[4];
                $tong = $tong + $ttien ?>
                <tr>
                    <td>
                        <div class="id">
                            <?= $cart[0] ?>
                        </div>
                    </td>
                    <td style="width:280px">
                        <div class="tensp-cart">
                            <?= $cart[1] ?>
                        </div>
                    </td>
                    <td>
                        <div class="img-cart">
                            <img src="../<?= $cart[2] ?>" alt="">
                        </div>
                    </td>
                    <td>
                        <div class="soluong">
                            <?= $cart[3] ?>
                        </div>
                    </td>
                    <td>
                        <div class="gia"><?= $cart[4] ?></div>
                    </td>
                    <td>
                        <div class="tongtien"><?= $ttien ?></div>
                    </td>
                    <td>
                        <div class="xoa"><button type="submit">Xoá</button></div>
                    </td>
                </tr>
                
            <?php } ?>
            <tr>
                    <th colspan="4">Tổng tiền</th>
                    <td colspan="2"><?= $tong ?></td>
                </tr>
        </table>
    </div>
</div>