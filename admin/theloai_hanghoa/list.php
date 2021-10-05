<div class="container1">
    <h1>DANH SÁCH THỂ LOẠI</h1>
    <table border="1">
        <tr>
            <th>Chọn</th>
            <th>ID thể loại</th>
            <th>Tên thể loại</th>
            <th>Ẩn hiện</th>
            <th colspan="2">Điều chỉnh</th>
        </tr>
        <?php foreach ($listtl as $listtheloai) { ?>
            <tr>
                <td><input type="checkbox" name=""></td>
                <td><?= $listtheloai['idTLhanghoa'] ?></td>
                <td><?= $listtheloai['tenLoaihanghoa'] ?></td>
                <td><?= ($listtheloai['anHien'] == 1) ? "Hiện" : "Ẩn" ?></td>
                <td>
                    <a href="index.php?edittl&idTLhanghoa=<?= $listtheloai['idTLhanghoa'] ?>"> <input class="dieuchinh" type="button" name="" id="" value="Sữa"></a>
                    <a href="index.php?deletetl&idTLhanghoa=<?= $listtheloai['idTLhanghoa'] ?>"> <input class="dieuchinh" type="button" name="" id="" value="Xoá"></a>
                </td>
            </tr>
        <?php } ?>
    </table>
    <div class="select">
        <input type="button" value="Chọn tất cả">
        <input type="button" value="Bỏ chọn tất cả">
        <input type="button" value="Xoá các mục đã chọn">
        <a href="index.php?addtl"><input type="button" value="Nhập thêm"></a>
    </div>
</div>