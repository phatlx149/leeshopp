<?php
require_once "../../global.php";
require_once "../../dao/pdo.php";
require_once "../../dao/hanghoa.php";
require_once "../../dao/theloaihh.php";
require_once "../../dao/sanpham.php";
?>

<?php

if (exist_param("listsp")) {
    $listsp = sanpham_loadall();
    $VIEW_NAME = "list.php";
} else if (exist_param("them")) {
    $tenSP = $_POST['tenSP'];
    $moTa = $_POST['moTa'];
    $urlHinh = $_FILES['urlHinh']['name'];
    $tager_dir = "../upload/images/";
    $targer_file = $tager_dir . basename($_FILES['urlHinh']['name']);
    if (move_uploaded_file($_FILES["urlHinh"]["tmp_name"], $targer_file)) {
        // echo "The file " . htmlspecialchars(basename($_FILES["hinh"]["name"])) . " has been uploaded.";
    } else {
        // echo "Sorry, there was an error uploading your file.";
    }
    $ngayNhap = $_POST['ngayNhap'];
    $donGia = $_POST['donGia'];
    $content = $_POST['content'];
    $idHangHoa = $_POST['idHangHoa'];
    $idTLhanghoa = $_POST['idTLhanghoa'];
    $anHien = $_POST['anHien'];
    sanpham_insert($tenSP, $moTa, $urlHinh, $ngayNhap, $donGia, $content, $idHangHoa, $idTLhanghoa, $anHien);
    $thongbao = "THÊM MỚI THÀNH CÔNG";
    $VIEW_NAME = "add.php";
} else if (exist_param("deletesp")) {
    sanpham_delete($_GET['idSanPham']);
    $listsp = sanpham_loadall();
    $VIEW_NAME = "list.php";
} else if (exist_param("editsp")) {
    $editsp = sanpham_editsp($_GET['idSanPham']);
    $VIEW_NAME = "update.php";
} else if (exist_param("capnhat")) {
    $idSanPham = $_POST['idSanPham'];
    $tenSP = $_POST['tenSP'];
    $moTa = $_POST['moTa'];
    $urlHinh = $_FILES['urlHinh']['name'];
    $tager_dir = "../upload/images/";
    $targer_file = $tager_dir . basename($_FILES['urlHinh']['name']);
    if (move_uploaded_file($_FILES["urlHinh"]["tmp_name"], $targer_file)) {
        // echo "The file " . htmlspecialchars(basename($_FILES["hinh"]["name"])) . " has been uploaded.";
    } else {
        // echo "Sorry, there was an error uploading your file.";
    }
    $ngayNhap = $_POST['ngayNhap'];
    $donGia = $_POST['donGia'];
    $content = $_POST['content'];
    $idHangHoa = $_POST['idHangHoa'];
    $idTLhanghoa = $_POST['idTLhanghoa'];
    $anHien = $_POST['anHien'];
    settype($anHien, "int");
    sanpham_update($tenSP, $moTa, $urlHinh, $ngayNhap, $donGia, $content, $idHangHoa, $idTLhanghoa, $anHien, $idSanPham);
    $thongbao = "CẬP NHẬT THÀNH CÔNG";
    $listsp = sanpham_loadall();
    $VIEW_NAME = "list.php";
} else {
    $VIEW_NAME = "add.php";
}
// Kiểm tra

require_once "../index.php"
?>

