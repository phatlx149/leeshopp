<div class="container1">
    <h1>Thêm hàng hoá</h1>
    <form action="index.php?addhh" method="post">
        <div class="form-group">
            <label class="text1" for="">ID hàng hoá</label>
            <input type="text" name="" placeholder="Auto" disabled>
        </div>
        <div class="form-group">
            <label class="text1" for="">Tên hàng hoá</label>
            <input type="text" name="tenHH">
        </div>
        <div class="form-group">
            <span>Trạng thái:</span>
            <input type="radio" name="anHien" value="1" checked>Hiện
            <input type="radio" name="anHien" value="0">Ẩn
        </div>
        <?php $layTen = theloaihh_idVaTen() ?>
        <div class="form-group">
            <span>Chọn thể loại:</span>
            <select name="idTLhanghoa" id="">
                <option value="0">Chọn thể loại</option>
                <?php foreach ($layTen as $tenTheLoai) { ?>
                    <option value="<?= $tenTheLoai['idTLhanghoa'] ?>"><?= $tenTheLoai['tenLoaihanghoa'] ?></option>
                <?php } ?>
            </select>
        </div>
        <div class="form-group">
            <input type="submit" value="Thêm" name="them">
            <input type="reset" value="Nhập lại">
            <a href="index.php?listhh"><input type="button" value="DANH SÁCH HÀNG HOÁ"></a>
        </div>
        <?php
        if (isset($thongbao) && ($thongbao != "")) {
            echo $thongbao;
        }
        ?>
    </form>
</div>