<?php
$sql_sua_danhmucsp = "SELECT * FROM tbl_category WHERE id_danhmuc='$_GET[iddanhmuc]' LIMIT 1";
$query_sua_danhmucsp = mysqli_query($mysqli, $sql_sua_danhmucsp);

?>
<table border="1px" style="border-collapse:collapse; width:50%">

<form method="POST" action="modules/quanlydanhmucsp/xuly.php?iddanhmuc=<?php echo  $_GET['iddanhmuc']?>"> 
    
    <?php
    while($dong = mysqli_fetch_array($query_sua_danhmucsp)) {
    ?>
<tr>
<th colspan="3">Sửa danh mục sản phẩm</th>
</tr>
<tr>
  <th>Thứ tự</th>
  <th>Điền danh mục sản phẩm</th>
  <th>Lệnh</th>
</tr>
<tr>
  <td><input type="text" value="<?php echo $dong['thutu'] ?>"  name="thutu" width="100%"> </td>
  <td><input type="text" value="<?php echo $dong['tendanhmuc'] ?>" name="tendanhmuc"></td>
  <td><input type="submit" name="suadanhmuc" value="Sửa danh mục sản phẩm"></td>
</tr>
<?php
    }
?>
</form>
</table>