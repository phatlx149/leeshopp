<?php
if (is_array($editsp)) {
    extract($editsp);
}

?>
<div class="container1">
    <h1>Cập nhật sản phẩm</h1>
    <form class="form" action="index.php?updatesp" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label class="text2" for="">ID sản phẩm</label>
            <input type="text" name="" placeholder="Auto" disabled>
        </div>
        <div class="form-group">
            <label class="text2" for="">Tên sản phầm</label>
            <input type="text" name="tenSP" value="<?php if (isset($tenSanPham) && ($tenSanPham) != "") echo $tenSanPham ?>">
        </div>

        <div class="form-group">
            <span>Hình ảnh</span>
            <input type="file" name="urlHinh" value=""><?= $urlHinh ?>

        </div>
        <div class="form-group">
            <span>Ngày nhập hàng</span>
            <input type="date" name="ngayNhap" value="<?= $ngayNhap ?>">

        </div>
        <div class="form-group">
            <span>Giá</span>
            <input type="text" name="donGia" value="<?= $donGia ?>">

        </div>
        <div class="form-group">
            <span>Trạng thái:</span>
            <div class="trangthai">
                <input type="radio" name="anHien" value="1" <?php if ($anHien == 1) echo "checked" ?>>Hiện
                <input type="radio" name="anHien" value="0" <?php if ($anHien == 0) echo "checked" ?>>Ẩn
            </div>
        </div>
        <div class="form-group">
            <span>Mô tả</span>
            <textarea name="moTa" id="" cols="30" rows="10"><?= $moTa ?></textarea>

        </div>
        <div class="form-group">
            <span>Nội dung sản phẩm</span>
            <textarea name="content" id="" cols="30" rows="10"><?= $contentSanPham ?></textarea>

        </div>
        <?php $layTen = theloaihh_idVaTen() ?>
        <?php $layTenLoai = hanghoa_idVaTen() ?>
        <div class="form-group">
            <span>Thể loại</span>
            <select name="idTLhanghoa" id="">
                <option value="">Chọn thể loại</option>
                <?php foreach ($layTen as $tenTheLoai) {
                    if ($idTLhanghoa == $tenTheLoai['idTLhanghoa']) { ?>
                        <option value="<?= $tenTheLoai['idTLhanghoa'] ?>" selected><?= $tenTheLoai['tenLoaihanghoa'] ?></option>
                    <?php } else { ?>
                        <option value="<?= $tenTheLoai['idTLhanghoa'] ?>"><?= $tenTheLoai['tenLoaihanghoa'] ?></option>
                    <?php } ?>

                <?php } ?>
            </select>
            <span>Hàng hoá</span>
            <select name="idHangHoa" id="">
                <option value="">Chọn hàng hoá</option>
                <?php foreach ($layTenLoai as $tenHangHoa) {
                    if ($idHangHoa == $tenHangHoa['idHangHoa']) { ?>
                        <option value="<?= $tenHangHoa['idHangHoa'] ?>" selected><?= $tenHangHoa['tenHangHoa'] ?></option>
                    <?php } else { ?>
                        <option value="<?= $tenHangHoa['idHangHoa'] ?>"><?= $tenHangHoa['tenHangHoa'] ?></option>
                    <?php } ?>

                <?php } ?>
            </select>


        </div>


        <div class="form-group1">
            <input type="hidden" name="idSanPham" value="<?php if (isset($idSanPham) && ($idSanPham) > 0) echo $idSanPham ?>">
            <input type="submit" value="Cập nhật" name="capnhat">
            <input type="reset" value="Nhập lại">
            <a href="index.php?listsp"><input type="button" value="DANH SÁCH SẢN PHẨM"></a>
        </div>
        <?php
        if (isset($thongbao) && ($thongbao != "")) echo $thongbao;
        ?>
    </form>
</div>