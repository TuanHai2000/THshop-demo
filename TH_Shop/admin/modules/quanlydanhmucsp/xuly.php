<?php
include('../../config/config.php');
$tenloaisanpham = $_POST['tendanhmuc'];
$thutu = $_POST['thutu'];
if(isset($_POST['themdanhmuc'])){
    // them///////
    $sql_them = "INSERT INTO    tbl_category (tendanhmuc,thutu) values('".$tenloaisanpham."','".$thutu."')";
    mysqli_query($mysqli, $sql_them);
    header('location:../../index.php?active=quanlydanhmucsp&query=them');
} elseif(isset($_POST['suadanhmuc'])){
// sửu///////////////////////////////////////////////
$sql_update = "UPDATE tbl_category SET tendanhmuc='".$tenloaisanpham."',thutu='".$thutu."' WHERE id_danhmuc='$_GET[iddanhmuc]'";
    mysqli_query($mysqli, $sql_update);
    header('location:../../index.php?active=quanlydanhmucsp&query=them');
}else{
    $id=$_GET['iddanhmuc'];
    $sql_delete = "DELETE FROM tbl_category WHERE  id_danhmuc='".$id."'";
    mysqli_query($mysqli, $sql_delete);
    header('location:../../index.php?active=quanlydanhmucsp&query=them');
}
?>