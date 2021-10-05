<div class="container1">
    <h1>DANH SÁCH KHÁCH HÀNG</h1>
    <table border="1">
        <tr>
            <th>Chọn</th>
            <th>ID khách hàng</th>
            <th>Username</th>
            <th>Password</th>
            <th>Email</th>
            <th>Vai trò</th>
            <th colspan="2">Điều chỉnh</th>
        </tr>
        <?php $khachhang = khachhang_selectall() ?>
        <?php foreach ($khachhang as $infokh) { ?>
            <tr>
                <td><input type="checkbox" name=""></td>
                <td><?= $infokh['idUser'] ?></td>
                <td><?= $infokh['username'] ?></td>
                <td><?= $infokh['pass'] ?></td>
                <td><?= $infokh['email'] ?></td>
                <td><?= ($infokh['vaiTro'] == 0) ? "Khách hàng" : "Admin" ?></td>
                <td>
                    <a href="index.php?editkh&idUser=<?= $infokh['idUser'] ?>"> <input class="dieuchinh" type="button" name="" id="" value="Sữa"></a>
                    <?php if ($infokh['vaiTro'] == 1) { ?>
                        <a href="index.php?deletekh&idUser=<?= $infokh['idUser'] ?>"> <input disabled class="dieuchinh" type="button" name="" id="" value="Xoá"></a>
                    <?php } else { ?>
                        <a  onclick="return confirm('Bạn muốn xoá?')" href="index.php?deletekh&idUser=<?= $infokh['idUser'] ?>"> <input class="dieuchinh" type="button" name="" id="" value="Xoá"></a>
                    <?php  } ?>
                </td>
            </tr>
        <?php } ?>
    </table>
    <div class="select">
        <input type="button" value="Chọn tất cả">
        <input type="button" value="Bỏ chọn tất cả">
        <input type="button" value="Xoá các mục đã chọn">
        
    </div>
</div>