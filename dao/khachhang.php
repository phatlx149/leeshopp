<?php

function khachhang_insert($username, $pass,  $email)
{
    $sql = "INSERT INTO khachhang(username, pass,email) VALUES(?,?,?)";
    pdo_execute($sql, $username, $pass,  $email);
}
function khachhang_checklogin($username, $pass)
{
    $sql = "SELECT * FROM khachhang WHERE username = ? AND pass = ?";
    return pdo_query_one($sql, $username, $pass);
}
function khachhang_checkreg($username, $email)
{
    $sql = "SELECT * FROM khachhang WHERE username = ? OR email = ?";
    return pdo_query_one($sql, $username, $email);
}
 function khachhang_editkh($idUser){
     $sql = "SELECT * FROM khachhang WHERE idUser = ?";
     return pdo_query_one($sql, $idUser);
 }
function khachhang_update($username, $emailKH, $idUser)
{
    $sql = "UPDATE khachhang SET username = ?, email = ? WHERE idUser = ?";
    pdo_execute($sql, $username, $emailKH, $idUser);
}
function khachhang_checkdoimat($username, $passKH)
{
    $sql = "SELECT * FROM khachhang WHERE username = ? AND pass = ?";
    return pdo_query_one($sql, $username, $passKH);
}
function khachhang_update_matkhau($passNew, $idUser)
{
    $sql = "UPDATE khachhang SET pass = ? WHERE idUser = ?";
    pdo_execute($sql, $passNew, $idUser);
}
function khachhang_delete($idUser)
{
    $sql = "DELETE FROM khachhang WHERE idUser=?";
    pdo_execute($sql, $idUser);
}

function khachhang_selectall()
{
    $sql = "SELECT * FROM khachhang ORDER BY idUser";
    return pdo_query($sql);
}

function khachhang_select_byid()
{
}

function khachhang_exist()
{
}

function khachhang_change_pass()
{
}
