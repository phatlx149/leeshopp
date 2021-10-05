<?php
session_start();



if ($_SESSION['kiemtra']['vaiTro'] != 1) {
    echo '<script>alert("Bạn không có quyền admin"); window.location="../../index.php";</script>';
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Trang quản trị Admin</title>
    <link rel="shortcut icon" href="<?= $CONTENT_URL ?>img/LOGO.png" type="image/x-icon" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="<?= $CONTENT_URL ?>css/style.css" />
    <link rel="stylesheet" href="<?= $CONTENT_URL ?>css/theloai.css" />
    <link rel="stylesheet" href="<?= $CONTENT_URL ?>css/login.css" />
    <link rel="stylesheet" href="<?= $CONTENT_URL ?>css/admin.css" />
    <link rel="stylesheet" href="<?= $CONTENT_URL ?>css/sanphamhh.css" />
    <link rel="stylesheet" href="<?= $CONTENT_URL ?>css/reponsive.css" />
    <link rel="stylesheet" href="<?= $CONTENT_URL ?>css/reponsive-contentitem.css" />
    <link rel="stylesheet" href="<?= $CONTENT_URL ?>css/reponsive-tablet.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/brands.min.css" integrity="sha512-sVSECYdnRMezwuq5uAjKQJEcu2wybeAPjU4VJQ9pCRcCY4pIpIw4YMHIOQ0CypfwHRvdSPbH++dA3O4Hihm/LQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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
            include "$VIEW_NAME";
            ?>
        </main>
        <script>
        $(window).on('load', function() {
            $(".loader").fadeOut(1000);
            $(".container").fadeIn(1000)
        })
    </script>
</body>

</html>