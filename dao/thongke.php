<?php
require_once "pdo.php";

function thongke_binhluan()
{
}

function thongke_hanghoa()
{
    $sql = "SELECT hanghoa.idHangHoa as idHangHoa, hanghoa.tenHangHoa as tenHangHoa, COUNT(sanpham.idSanPham)as countsp,
    MIN(sanpham.donGia) as giathap,AVG(sanpham.donGia) as giatb,
    MAX(sanpham.donGia) as giacao
    FROM sanpham 
    LEFT JOIN hanghoa ON hanghoa.idHangHoa = sanpham.idHangHoa GROUP BY hanghoa.idHangHoa ORDER BY hanghoa.idHangHoa";
    return pdo_query($sql);
}
