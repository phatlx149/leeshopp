<?php
require_once "../../global.php";
require_once "../../dao/pdo.php";
require_once "../../dao/khachhang.php";
?>

<?php

// if (exist_param("listhh")) {
//     $listhh = hanghoa_loadall();
//     $VIEW_NAME = "list.php";
// } else if (exist_param("them")) {
//     $tenHH = $_POST['tenHH'];
//     $anHien = $_POST['anHien'];
//     $idTLhanghoa = $_POST['idTLhanghoa'];
//     settype($anHien, "int");
//     settype($idTLhanghoa, "int");
//     hanghoa_insert($tenHH, $idTLhanghoa, $anHien);
//     $thongbao = "THÊM MỚI THÀNH CÔNG";
//     $VIEW_NAME = "add.php";
// } else 
if (exist_param("deletekh")) {
    khachhang_delete($_GET['idUser']);
    $listkh = khachhang_selectall();
    $VIEW_NAME = "list.php";
} else if (exist_param("editkh")) {
    $editkh = khachhang_editkh($_GET['idUser']);
    $VIEW_NAME = "update.php";
} else if (exist_param("capnhat")) {
    $username = $_POST['username'];
    $passKH = $_POST['passKH'];
    $emailKH = $_POST['emailKH'];
    $vaitroKH = $_POST['vaitroKH'];
    $idUser = $_POST['idUser'];
    $thongbao = "CẬP NHẬT THÀNH CÔNG";
    khachhang_update($username, $passKH, $emailKH, $vaitroKH, $idUser);
    $thongbao = "CẬP NHẬT THÀNH CÔNG";
    $listkh = khachhang_selectall();
    $VIEW_NAME = "list.php";
} else {
    $VIEW_NAME = "list.php";
}
// Kiểm tra

require_once "../index.php"
?>


<!-- case "dskh":
require_once "khachhang/list.php";
break; -->