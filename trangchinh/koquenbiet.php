<?php
session_start();

$ROOT_URL = "/ps15606_lxp";
$CONTENT_URL = "$ROOT_URL/content";
$ADMIN_URL = "$ROOT_URL/admin";
$SITE_URL = "$ROOT_URL/site";

// định nghĩa đường dẫn chứa ảnh sử dụng trong upload

$IMAGES_DIR = $_SERVER['DOCUMENT_ROOT'] . "$ROOT_URL/content/upload/images";


// 2 biến toàn cục cần thiết để chia sẽ  giữa controller và vew
$VIEW_NAME = "index.php";
$thongbao = "";


//Kiểm tra sự tồn tại của một tham số trong request
// $fieldname là tên tham số cần kiểm tra
function exist_param($fieldname)
{
    return array_key_exists($fieldname, $_REQUEST);
}

// Lưu file vào thư mục
function save_files($fieldname, $target_dir)
{
    $file_uploaded = $_FILES[$fieldname];
    $file_name = basename($file_uploaded['name']);
    $target_path = $target_dir . $file_name;
    move_uploaded_file($file_uploaded['tmp_name'], $target_path);
    return $file_name;
}

// Tạo cookie
function add_cookie($name, $value, $day)
{
    setcookie($name, $value, time() + (86400 * $day), "/");
}

//Xoá cookie
function delete_cookie($name)
{
    add_cookie($name, "", -1);
}

//Đọc giá trị cookie
function get_cookie($name)
{
    return $_COOKIE[$name] ?? '';
}
