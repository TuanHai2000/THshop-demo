<?php
session_start();
include('../admin/config/config.php');
//them so luong
//tru so luong
//xoa san pham
//them san pham vao gio hang
if(isset($_POST['themgiohang'])){
    $id=$_GET['idsanpham'];
    $soluong=1;
    $sql = "SELECT * FROM tbl_sanpham WHERE id_sanpham='".$id."' limit 1";
    $query= mysqli_fetch_array($mysqli,$sql);
    $row = mysqli_fetch_array($query);
    if($row){
        $new_product=array(array('tensanpham'=> $row['tensanpham'],'id'=>$id,'soluong'=>$row['soluong'],'giasp'=>$row['giasp'],
        'hinhanh'=>$row['hinhanh'],'masp'=>$row['masp']));
        //kiem tra session gio hang da ton tai hay chua
        if(isset($_SESSION['cart'])){
            $found = false;
            foreach()
        }else{
            $_SESSION['cart'] = $new_product;
        }
    }
}

?>
