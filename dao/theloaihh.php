<?php
// PHẦN THỂ LOẠI HÀNG HOÁ DÙNG CHO ADMIN
function theloaihh_insert($tenTL, $anHien)
{
    $sql = " INSERT INTO theloaihh(tenLoaihanghoa, anHien) VALUES (?, ?)";
    pdo_execute($sql, $tenTL, $anHien);
}

function theloaihh_delete($idTLhanghoa)
{
    $sql = "DELETE FROM theloaihh WHERE idTLhanghoa=?";
    pdo_execute($sql, $idTLhanghoa);
}
function theloaihh_loadall()
{
    $sql = "SELECT * FROM theloaihh";
    $listtl = pdo_query($sql);
    return $listtl;
}

function theloaihh_idVaTen()
{
    $sql = "SELECT idTLhanghoa, tenLoaihanghoa FROM theloaihh";
    return pdo_query($sql);
}
function theloaihh_edit($idTLhanghoa)
{
    $sql = "SELECT * FROM theloaihh WHERE idTLhanghoa=?";
    $edittl = pdo_query_one($sql, $idTLhanghoa);
    return $edittl;
}
function theloaihh_update($tenTL, $anHien, $idTLhanghoa)
{
    $sql = "UPDATE theloaihh SET tenLoaihanghoa=?, anHien=? WHERE idTLhanghoa=?";
    pdo_execute($sql, $tenTL, $anHien, $idTLhanghoa);
}
// END



//PHẦN DÙNG CHO PHẦN KHÁCH HÀNG - VIEW
function theloaihh_tenTheLoai()
{
    $sql = "SELECT * FROM theloaihh WHERE anHien=1";
    $theloaihh_layTen = pdo_query($sql);
    return $theloaihh_layTen;
}
//Lấy menu: Thể loại
function theLoai()
{
    $sql = "SELECT * FROM theloaihh WHERE anHien=1";

    return pdo_query($sql);
}
// Lấy menu con: hàng hoá theo idTLhanghoa
function layMenuCon($idTLhanghoa)
{
    $sql = "SELECT * FROM hanghoa WHERE idTLhanghoa = ?";

    return pdo_query($sql, $idTLhanghoa);
}
