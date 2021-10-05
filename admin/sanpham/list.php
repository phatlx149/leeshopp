<div class="container1">
    <h1>DANH SÁCH THỂ LOẠI</h1>
    <table border="1">
        <tr>
            <th>Chọn</th>
            <th>ID sản phẩm</th>
            <th>Tên sản phẩm</th>
            <th>Hình ảnh</th>
            <th>Ngày nhập hàng</th>
            <th>Giá</th>
            <th>Ẩn hiện</th>
            <th>Mô tả</th>
            <th>Nội dung</th>
            <th>Thể loại</th>
            <th>Hàng hoá</th>
            <th colspan="2">Điều chỉnh</th>
        </tr>
        <?php foreach ($listsp as $listsanpham) { ?>
            <tr>
                <td><input type="checkbox" name=""></td>
                <td>
                    <div class="table">
                        <?= $listsanpham['idSanPham'] ?>
                    </div>
                </td>
                <td>
                    <div class="table">
                        <?= $listsanpham['tenSanPham'] ?>
                    </div>
                </td>
                <td>
                    <div class="table">
                        <?= $listsanpham['urlHinh'] ?>
                    </div>
                </td>
                <td>
                    <div class="table">
                        <?= $listsanpham['ngayNhap'] ?>
                    </div>
                </td>
                <td>
                    <div class="table">
                        <?= number_format($listsanpham['donGia']) ?>đ
                    </div>
                </td>
                <td>
                    <div class="table">
                        <?= ($listsanpham['anHien'] == 1) ? "Hiện" : "Ẩn" ?>
                    </div>
                </td>
                <td>
                    <div class="table">
                        <?= $listsanpham['moTa'] ?>
                    </div>
                </td>
                <td>
                    <div class="table">
                        <?= $listsanpham['contentSanPham'] ?>
                    </div>
                </td>
                <td>
                    <div class="table">
                        <?= theloaihh_layTen($listsanpham['idTLhanghoa']) ?>
                    </div>
                </td>
                <td>
                    <div class="table">
                        <?= hanghoa_layTen($listsanpham['idHangHoa']) ?>
                    </div>
                </td>
                <td>
                    <a href="index.php?editsp&idSanPham=<?= $listsanpham['idSanPham'] ?>"> <input class="dieuchinh" type="button" name="" id="" value="Sữa"></a>
                    <a  onclick="return confirm('Bạn muốn xoá?')" href="index.php?deletesp&idSanPham=<?= $listsanpham['idSanPham'] ?>"> <input class="dieuchinh" type="button" name="" id="" value="Xoá"></a>
                </td>
            </tr>
        <?php } ?>
    </table>
    <div class="select">
        <input type="button" value="Chọn tất cả">
        <input type="button" value="Bỏ chọn tất cả">
        <input type="button" value="Xoá các mục đã chọn">
        <a href="index.php?addsp"><input type="button" value="Nhập thêm"></a>
    </div>
</div>