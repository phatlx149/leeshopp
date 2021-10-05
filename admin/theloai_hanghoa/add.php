<div class="container1">
    <h1>Thêm thể loại</h1>
    <form action="index.php?addsp" method="post">
        <div class="form-group">
            <label class="text1" for="">ID thể loại</label>
            <input type="text" name="" placeholder="Auto" disabled>
        </div>
        <div class="form-group">
            <label class="text1" for="">Tên thể loại</label>
            <input type="text" name="tenTL">
        </div>
        <div class="form-group">
            <span>Trạng thái:</span>
            <input type="radio" name="anHien" value="1" checked>Hiện
            <input type="radio" name="anHien" value="0">Ẩn
        </div>
        <div class="form-group">
            <input type="submit" value="Thêm" name="them">
            <input type="reset" value="Nhập lại">
            <a href="index.php?listl"><input type="button" value="DANH SÁCH THỂ LOẠI"></a>
        </div>
        <?php
        if (isset($thongbao) && ($thongbao != "")) echo $thongbao;
        ?>
    </form>
</div>