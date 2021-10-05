<?php
require_once "../../global.php";
require_once "../../dao/pdo.php";
require_once "../../dao/hanghoa.php";
require_once "../../dao/theloaihh.php";
?>

<?php

if (exist_param("listhh")) {
    $listhh = hanghoa_loadall();
    $VIEW_NAME = "list.php";
} else if (exist_param("them")) {
    $tenHH = $_POST['tenHH'];
    $anHien = $_POST['anHien'];
    $idTLhanghoa = $_POST['idTLhanghoa'];
    settype($anHien, "int");
    settype($idTLhanghoa, "int");
    hanghoa_insert($tenHH, $idTLhanghoa, $anHien);
    $thongbao = "THÊM MỚI THÀNH CÔNG";
    $VIEW_NAME = "add.php";
} else if (exist_param("deletehh")) {
    hanghoa_delete($_GET['idHangHoa']);
    $listhh = hanghoa_loadall();
    $VIEW_NAME = "list.php";
} else if (exist_param("edithh")) {
    $edithh = hanghoa_edit($_GET['idHangHoa']);
    $VIEW_NAME = "update.php";
} else if (exist_param("capnhat")) {
    $idHangHoa = $_POST['idHangHoa'];
    $tenHH = $_POST['tenHH'];
    $idTLhanghoa = $_POST['idTLhanghoa'];
    $anHien = $_POST['anHien'];
    settype($anHien, "int");
    hanghoa_update($tenHH, $idTLhanghoa, $anHien, $idHangHoa);
    $thongbao = "CẬP NHẬT THÀNH CÔNG";
    $listhh = hanghoa_loadall();
    $VIEW_NAME = "list.php";
} else {
    $VIEW_NAME = "add.php";
}
// Kiểm tra

require_once "../index.php"
?>





