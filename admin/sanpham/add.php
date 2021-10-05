<div class="container1">
    <h1>Thêm sản phẩm</h1>
    <form class="form" action="index.php?addsp" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label class="text2" for="">ID sản phẩm</label>
            <input type="text" name="" placeholder="Auto" disabled>
        </div>
        <div class="form-group">
            <label class="text2" for="">Tên sản phầm</label>
            <input type="text" name="tenSP">
        </div>

        <div class="form-group">
            <span>Hình ảnh</span>
            <input type="file" name="urlHinh">

        </div>
        <div class="form-group">
            <span>Ngày nhập hàng</span>
            <input type="date" name="ngayNhap">

        </div>
        <div class="form-group">
            <span>Giá</span>
            <input type="text" name="donGia">

        </div>
        <div class="form-group">
            <span>Trạng thái:</span>
            <div class="trangthai">
                <input type="radio" name="anHien" value="1" checked>Hiện
                <input type="radio" name="anHien" value="0">Ẩn
            </div>
        </div>
        <div class="form-group">
            <span>Mô tả</span>
            <textarea name="moTa" id="" cols="30" rows="10"></textarea>

        </div>
        <div class="form-group">
            <span>Nội dung sản phẩm</span>
            <textarea name="content" id="" cols="30" rows="10"></textarea>

        </div>
        <?php $layTen = theloaihh_idVaTen() ?>
        <?php $layTenLoai = hanghoa_idVaTen()?>
        <div class="form-group">
            <span>Thể loại</span>
            <select name="idTLhanghoa" id="">
                <option value="">Chọn thể loại</option>
                <?php foreach ($layTen as $tenTheLoai) { ?>
                    <option value="<?= $tenTheLoai['idTLhanghoa'] ?>"><?= $tenTheLoai['tenLoaihanghoa'] ?></option>
                <?php } ?>
            </select>
            <span>Hàng hoá</span>
            <select name="idHangHoa" id="">
                <option value="">Chọn hàng hoá</option>
                <?php foreach ($layTenLoai as $tenHangHoa) { ?>
                    <option value="<?= $tenHangHoa['idHangHoa'] ?>"><?= $tenHangHoa['tenHangHoa'] ?></option>
                <?php } ?>
            </select>


        </div>


        <div class="form-group1">
            <input type="hidden" name="idSanPham" value="<?php if (isset($idSanPham) && ($idSanPham) > 0) echo $idSanPham ?>">
            <input type="submit" value="Thêm" name="them">
            <input type="reset" value="Nhập lại">
            <a href="index.php?listsp"><input type="button" value="DANH SÁCH SẢN PHẨM"></a>
        </div>
        <?php
        if (isset($thongbao) && ($thongbao != "")) echo $thongbao;
        ?>
    </form>
</div>