<?php
// PHẦN TRANG CHỨC NĂNG DÀNH CHO QUẢN LÍ SẢN PHẨM
function sanpham_insert($tenSP, $moTa, $urlHinh, $ngayNhap, $donGia, $content, $idHangHoa, $idTLhanghoa, $anHien)
{
    $sql = "INSERT INTO sanpham(tenSanPham, moTa, urlHinh, ngayNhap, donGia, contentSanPham, idHangHoa, idTLhanghoa, anHien)
    VALUES(?, ?, ?, ?, ?, ?, ?, ?, ? )";
    pdo_execute($sql, $tenSP, $moTa, $urlHinh, $ngayNhap, $donGia, $content, $idHangHoa, $idTLhanghoa, $anHien);
}
function sanpham_delete($idSanPham)
{
    $sql = "DELETE FROM sanpham WHERE idSanPham =?";
    pdo_execute($sql, $idSanPham);
}
function sanpham_editsp($idSanPham)
{
    $sql = "SELECT * FROM sanpham WHERE idSanPham =?";
    $editsp = pdo_query_one($sql, $idSanPham);
    return $editsp;
}
function  sanpham_update($tenSP, $moTa, $urlHinh, $ngayNhap, $donGia, $content, $idHangHoa, $idTLhanghoa, $anHien, $idSanPham)
{
    $sql = "UPDATE sanpham SET tenSanPham = ? ,moTa = ? ,urlHinh = ? ,ngayNhap = ? ,donGia = ? ,contentSanPham = ? ,idHangHoa = ? ,idTLhanghoa = ? ,anHien = ? WHERE idSanPham =?";
    pdo_execute($sql, $tenSP, $moTa, $urlHinh, $ngayNhap, $donGia, $content, $idHangHoa, $idTLhanghoa, $anHien,  $idSanPham);
}
function sanpham_loadall()
{
    $sql = "SELECT * FROM sanpham ORDER BY idSanPham";
    $listsp = pdo_query($sql);
    return $listsp;
}

// end
// Dành cho đổ dữ liệu sản phẩm
// Hiện TOP sản phẩm có lượt xem lớn hơn 5 
function top10SP()
{
    $sql = "SELECT * FROM sanpham ORDER BY soLuotXem > 5 DESC LIMIT 0, 12 ";
    return pdo_query($sql);
}
// Lấy ra những sản phẩm cùng với menucon
function danhmucSP($idHangHoa)
{
    $sql = "SELECT idSanPham, tenSanPham, donGia, urlHinh FROM sanpham WHERE idHangHoa=? AND anHien = 1 LIMIT 0,12 ";
    return pdo_query($sql, $idHangHoa);
}

// Lấy ra chi tiết sản phẩm hiện ra
function layChiTietTin($idSanPham)
{
    $sql = "SELECT * FROM sanpham WHERE idSanPham=?";
    return pdo_query_one($sql, $idSanPham);
}
// Tăng số lượt xem khi ấn vào sản phẩm
function tangSoLanXem($idSanPham)
{
    $sql = "UPDATE sanpham SET soLuotXem = soLuotXem + 1 WHERE idSanPham = ?";
    pdo_execute($sql, $idSanPham);
}

//Hiển thị ra sản phẩm cùng loại khi nhấp vào chi tiết sản phẩm
function sanpham_cungloai($idHangHoa, $idSanPham)
{
    $sql = "SELECT * FROM sanpham WHERE idHangHoa=? AND idSanPham <> ? LIMIT 0, 3";
    $listspcl = pdo_query($sql, $idHangHoa, $idSanPham);
    return $listspcl;
}




// Tìm kiếm sản phẩm
function sanpham_keyserch($key)
{
    $sql = "SELECT * FROM sanpham WHERE tenSanPham LIKE ? ";
    return pdo_query($sql, $key);
}
