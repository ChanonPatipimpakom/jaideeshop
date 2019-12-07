<?php 
    session_start();
    include("connect.php");
    $pid = $_POST['hdnProductId'];
    $name = $_POST['txtName'];
    $desc = $_POST['txtDescrip'];
    $price = $_POST['txtPrice'];
    $unitInStock = $_POST['txtStock'];
    //$filename = $_FILES["filePic"]["name"];

    $sql = "UPDATE product SET name='$name', description='$desc', price=$price, unitInStock=$unitInStock WHERE id = $pid";
    //echo $sql;
?>