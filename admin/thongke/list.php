<div class="container1">
    <h1>THỐNG KÊ HÀNG HOÁ</h1>
    <table border="1">
        <tr>
            <!-- <th>Chọn</th> -->
            <th>ID hàng hoá</th>
            <th>Tên hàng hoá</th>
            <th>Số lượng</th>
            <th>Giá thấp</th>
            <th>Giá trung bình</th>
            <th>Giá cao</th>
            <!-- <th colspan="2">Điều chỉnh</th> -->
        </tr>
        <?php $tk = thongke_hanghoa();  ?>
        <?php foreach ($tk as $thongke) {
        ?>
            <tr>
                <!-- <td><input type="checkbox" name=""></td> -->
                <td><?= $thongke['idHangHoa'] ?></td>
                <td><?= $thongke['tenHangHoa'] ?></td>
                <td><?= $thongke['countsp'] ?></td>
                <td><?= number_format($thongke['giathap']) ?>đ</td>
                <td><?= number_format($thongke['giatb']) ?>đ</td>
                <td><?= number_format($thongke['giacao']) ?>đ</td>

            </tr>

        <?php } ?>
    </table>
    <div class="select">
        <input type="button" value="Chọn tất cả">
        <input type="button" value="Bỏ chọn tất cả">
        <input type="button" value="Xoá các mục đã chọn">
        <!-- <a href="index.php?page=addhh"><input type="button" value="Nhập thêm"></a> -->
    </div>
</div>