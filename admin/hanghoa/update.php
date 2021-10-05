<?php
if (is_array($edithh)) {
    extract($edithh);
}
?>

<div class="container1">
    <h1>Cập nhật hàng hoá</h1>
    <form action="index.php?updatehh" method="post">
        <div class="form-group">
            <label class="text1" for="">ID hàng hoá</label>
            <input type="text" name="idHH" placeholder="Auto" disabled>
        </div>
        <div class="form-group">
            <label class="text1" for="">Tên hàng hoá</label>
            <input type="text" name="tenHH" value="<?= $tenHangHoa ?>">
        </div>
        <div class="form-group">
            <span>Trạng thái:</span>
            <input type="radio" name="anHien" value="1" <?php if ($anHien == 1) echo "checked" ?>>Hiện
            <input type="radio" name="anHien" value="0" <?php if ($anHien == 0) echo "checked" ?>>Ẩn
        </div>
        <?php $layTenLoai = theloaihh_idVaTen() ?>

        <div class="form-group">
            <span>Chọn thể loại:</span>
            <select name="idTLhanghoa" id="">
                <option value="0">Chọn thể loại</option>
                <?php foreach ($layTenLoai as $tenTheLoai) { ?>
                    <?php if ($idTLhanghoa == $tenTheLoai['idTLhanghoa']) { ?>
                        <option value="<?= $tenTheLoai['idTLhanghoa'] ?>" selected><?= $tenTheLoai['tenLoaihanghoa'] ?></option>
                    <?php } else { ?>
                        <option value="<?= $tenTheLoai['idTLhanghoa'] ?>"><?= $tenTheLoai['tenLoaihanghoa'] ?></option>
                    <?php } ?>
                <?php } ?>
            </select>
        </div>
        <div class="form-group">
            <input type="hidden" name="idHangHoa" value="<?php if (isset($idHangHoa) && ($idHangHoa) > 0) echo $idHangHoa ?>">
            <input type="submit" value="Cập nhật" name="capnhat">
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