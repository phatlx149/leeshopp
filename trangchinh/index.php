<?php
session_start();
require_once "../dao/pdo.php";
require_once "../dao/theloaihh.php";
require_once "../dao/hanghoa.php";
require_once "../dao/sanpham.php";
require_once "../dao/khachhang.php";
require_once "../global.php";


if (isset($_GET['page'])) $page = $_GET['page'];


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Trang chủ</title>
    <link rel="shortcut icon" href="<?= $CONTENT_URL ?>img/LOGO.png" type="image/x-icon" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="<?= $CONTENT_URL ?>css/style.css" />
    <link rel="stylesheet" href="<?= $CONTENT_URL ?>css/reponsive.css" />
    <link rel="stylesheet" href="<?= $CONTENT_URL ?>css/reponsive-contentitem.css" />
    <link rel="stylesheet" href="<?= $CONTENT_URL ?>css/reponsive-tablet.css" />
    <link rel="stylesheet" href="<?= $CONTENT_URL ?>css/sanpham.css" />
    <link rel="stylesheet" href="<?= $CONTENT_URL ?>css/cart.css" />
    <link rel="stylesheet" href="<?= $CONTENT_URL ?>css/chitietsp.css" />
    <link rel="stylesheet" href="<?= $CONTENT_URL ?>css/login.css" />
    <link rel="stylesheet" href="<?= $CONTENT_URL ?>css/khachhang.css" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/brands.min.css" integrity="sha512-sVSECYdnRMezwuq5uAjKQJEcu2wybeAPjU4VJQ9pCRcCY4pIpIw4YMHIOQ0CypfwHRvdSPbH++dA3O4Hihm/LQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>

<body>
    <div class="loader">
        <div></div>
    </div>
    <div class="container">
        <header class="header">
            <?php require_once "header.php" ?>
        </header>
        <nav class="nav">
            <?php require_once "nav.php" ?>
        </nav>
        <main class="main">

            <?php

            switch ($page) {
                case "login":
                    require_once "./taikhoan/login.php";

                    break;
                case "reg":

                    require_once "./taikhoan/reg.php";
                    break;
                case "loai":

                    require_once "./sanpham/sanpham-trongloai.php";
                    break;
                case "chitietsp":
                    require_once "./sanpham/chitietsp.php";
                    break;
                case "timkiem":
                    require_once "./sanpham/serch.php";
                    break;
                case "doimk":
                    require_once "./taikhoan/doimk.php";
                    break;
                case "thongtincanhan":
                    require_once "./taikhoan/thongtincanhan.php";
                    break;
                default:
                    require_once "./sanpham/box-sanpham.php";
            }

            ?>
        </main>
        <footer class="footer">
            <?php require_once "footer.php" ?>
        </footer>
        <?php
        if (($_SESSION['kiemtra'])) { ?>
            <div class='cart'>
                <div class='giohang'>
                    <a href="?page=addcart"> <i class='fas fa-shopping-cart'></i></a>
                    <!-- <span>0</span> -->
                </div>
            </div>
        <?php }  ?>


    </div>

    <script src="js/scripts.js"></script>
    <script>
        $(window).on('load', function() {
            $(".loader").fadeOut(1000);
            $(".container").fadeIn(1000)
        })
    </script>

</body>

</html>