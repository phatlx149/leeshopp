<?php
require_once "../../global.php";
require_once "../../dao/pdo.php";
require_once "../../dao/theloaihh.php";
?>

<?php

if (exist_param("listl")) {
    $listtl = theloaihh_loadall();
    $VIEW_NAME = "list.php";
} else if (exist_param("them")) {
    $tenTL = $_POST['tenTL'];
    $anHien = $_POST['anHien'];
    settype($anHien, "int");
    theloaihh_insert($tenTL, $anHien);
    $VIEW_NAME = "add.php";
    $thongbao = "THÊM MỚI THÀNH CÔNG";
} else if (exist_param("deletetl")) {
    theloaihh_delete($_GET['idTLhanghoa']);
    $listtl = theloaihh_loadall();
    $VIEW_NAME = "list.php";
} else if (exist_param("edittl")) {
    $edittl = theloaihh_edit($_GET['idTLhanghoa']);
    $VIEW_NAME = "update.php";
} else if (exist_param("capnhat")) {
    $tenTL = $_POST['tenTL'];
    $idTLhanghoa = $_POST['idTLhanghoa'];
    $anHien = $_POST['anHien'];
    settype($anHien, "int");
    theloaihh_update($tenTL, $anHien, $idTLhanghoa);
    $thongbao = "CẬP NHẬT THÀNH CÔNG";
    $listtl = theloaihh_loadall();
    $VIEW_NAME = "list.php";
} else {
    $VIEW_NAME = "add.php";
}
// Kiểm tra

require_once "../index.php"
?>

