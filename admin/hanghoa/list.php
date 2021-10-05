<div class="container1">
    <h1>DANH SÁCH THỂ LOẠI</h1>
    <table border="1">
        <tr>
            <th>Chọn</th>
            <th>ID hàng hoá</th>
            <th>Tên hàng hoá</th>
            <th>Ẩn hiện</th>
            <th>Thể loại</th>
            <th colspan="2">Điều chỉnh</th>
        </tr>
        <?php foreach ($listhh as $listhanghoa) { ?>
            <tr>
                <td><input type="checkbox" name=""></td>
                <td><?= $listhanghoa['idHangHoa'] ?></td>
                <td><?= $listhanghoa['tenHangHoa'] ?></td>
                <td><?= ($listhanghoa['anHien'] == 1) ? "Hiện" : "Ẩn" ?></td>
                <td><?= theloaihh_layTen($listhanghoa['idTLhanghoa']) ?></td>
                <td>
                    <a href="index.php?edithh&idHangHoa=<?= $listhanghoa['idHangHoa'] ?>"> <input class="dieuchinh" type="button" name="" id="" value="Sữa"></a>
                    <a  onclick="return confirm('Bạn muốn xoá?')" href="index.php?deletehh&idHangHoa=<?= $listhanghoa['idHangHoa'] ?>"> <input class="dieuchinh" type="button" name="" id="" value="Xoá"></a>
                </td>
            </tr>
        <?php } ?>
    </table>
    <div class="select">
        <input type="button" value="Chọn tất cả">
        <input type="button" value="Bỏ chọn tất cả">
        <input type="button" value="Xoá các mục đã chọn">
        <a href="index.php?addhh"><input type="button" value="Nhập thêm"></a>
    </div>
</div>