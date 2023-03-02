<?php
$sql_lietke_danhmucsp = "SELECT * FROM tbl_category order by thutu DESC";
$query_lietke_danhmucsp = mysqli_query($mysqli, $sql_lietke_danhmucsp);

?>
<table border="1px" style="border-collapse:collapse; width:50%;"> 
  <tr>
  <th colspan="3">Liệt kê mục sản phẩm</th>
  </tr>
<tr>
    <th>Id</th>
    <th>Tên danh mục sản phẩm</th>
    <th>Quản lý</th>

  </tr>
 
    <?php
    $i = 0;
    while ($row = mysqli_fetch_array($query_lietke_danhmucsp)) {
        $i++;
    ?>
    <tr>
        <td><?php echo $i ?></td>
        <td><?php echo $row['tendanhmuc'] ?></td>
        <td>
            <a href="modules/quanlydanhmucsp/xuly.php?iddanhmuc=<?php echo $row['id_danhmuc']?>">Xóa</a> | 
            <a href="?active=quanlydanhmucsp&query=sua&iddanhmuc=<?php echo $row['id_danhmuc']?>">Sửa</a>
        </td>

    </tr>
    <?php
    }
    ?>
</table>