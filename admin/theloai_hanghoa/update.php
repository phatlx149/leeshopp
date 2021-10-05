<?php
if (is_array($edittl)) {
    extract($edittl);
}
?>

<div class="container1">
    <h1>Cập nhật thể loại</h1>
    <form action="index.php?page=updatetl" method="post">
        <div class="form-group">
            <label class="text1" for="">ID thể loại</label>
            <input type="text" name="idTL" placeholder="Auto" disabled>
        </div>
        <div class="form-group">
            <label class="text1" for="">Tên thể loại</label>
            <input type="text" name="tenTL" value="<?php if (isset($tenLoaihanghoa) && ($tenLoaihanghoa) != "") echo $tenLoaihanghoa ?>">
        </div>
        <div class="form-group">
            <span>Trạng thái:</span>
            <input type="radio" name="anHien" value="1" <?php if ($anHien == 1) echo "checked" ?>>Hiện
            <input type="radio" name="anHien" value="0" <?php if ($anHien == 0) echo "checked" ?>>Ẩn
        </div>
        <div class="form-group">
            <input type="hidden" name="idTLhanghoa" value="<?php if (isset($idTLhanghoa) && ($idTLhanghoa) > 0) echo $idTLhanghoa ?>">
            <input type="submit" value="Cập nhật" name="capnhat">
            <input type="reset" value="Nhập lại">
            <a href="index.php?page=listtl"><input type="button" value="DANH SÁCH THỂ LOẠI"></a>
        </div>
        <?php
        if (isset($thongbao) && ($thongbao != "")) {
            echo $thongbao;
        }
        ?>
    </form>
</div>