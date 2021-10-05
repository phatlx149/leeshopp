<?php
function hanghoa_insert($tenHH, $idTLhanghoa, $anHien)
{
    $sql = "INSERT INTO hanghoa(tenHangHoa, idTLhanghoa, anHien) VALUES(?, ?, ?)";
    pdo_execute($sql, $tenHH, $idTLhanghoa, $anHien);
}
function hanghoa_delete($idHangHoa)
{
    $sql = "DELETE FROM hanghoa WHERE idHangHoa = ?";
    pdo_execute($sql, $idHangHoa);
}
function hanghoa_edit($idHangHoa)
{
    $sql = "SELECT * FROM hanghoa WHERE idHangHoa=?";
    $edithh = pdo_query_one($sql, $idHangHoa);
    return $edithh;
}
function hanghoa_update($tenHH, $idTLhanghoa, $anHien, $idHangHoa)
{
    $sql = "UPDATE hanghoa SET tenHangHoa=?, idTLhanghoa =?, anHien=?  WHERE idHangHoa=?";
    pdo_execute($sql, $tenHH, $idTLhanghoa, $anHien, $idHangHoa);
}
function hanghoa_loadall()
{
    $sql = "SELECT * FROM hanghoa";
    $listhh = pdo_query($sql);
    return $listhh;
}
function theloaihh_layTen($idTLhanghoa)
{
    $sql = "SELECT tenLoaihanghoa FROM theloaihh WHERE idTLhanghoa=?";
    $layTen =  pdo_query_one($sql, $idTLhanghoa);
    return $layTen['tenLoaihanghoa'];
}
function hanghoa_layTen($idHangHoa)
{
    $sql = "SELECT tenHangHoa FROM hanghoa WHERE idHangHoa=?";
    $layTen =  pdo_query_one($sql,$idHangHoa);
    return $layTen['tenHangHoa'];
}
function hanghoa_idVaTen()
{
    $sql = "SELECT idHangHoa, tenHangHoa FROM hanghoa";
    return pdo_query($sql);
}
