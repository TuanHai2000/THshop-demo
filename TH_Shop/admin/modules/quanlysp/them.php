
<table border="1px" style="border-collapse:collapse; width:100%">

  <form method="POST" action="modules/quanlysp/xuly.php" enctype="multipart/form-data">  
  <tr>
  <th colspan="2">Thêm sản phẩm</th>
  </tr>
  <tr>
    <td>Tên sản phẩm</td>
    <td><input type="text" name="tensanpham"></td>
  </tr>
  <tr>
    <td>mã sp</td> 
    <td><input type="text" name="masp"></td>
  </tr>
  <tr>
    <td>Giá sản phẩm</td>
    <td><input type="text" name="giasp"></td>
  </tr>
  <tr>
    <td>Số lượng</td>
    <td><input type="text" name="soluong"></td>
  </tr>
  <tr>
    <td>Hình ảnh</td>
    <td><input type="file" name="hinhanh"></td>
  </tr>
  <tr>
    <td>Tóm tắt</td>
    <td><textarea rows="10"  name="tomtat" ></textarea></td>
  </tr>
  <tr>
    <td>Nội dung</td>
    <td><textarea rows="10"  name="noidung" ></textarea></td>
  </tr>
  <tr>
    <td>Danh mục sản phẩm</td>
    <td>
      <select name="danhmuc">
        <?php
        $sql_danhmuc = "SELECT * FROM tbl_category ORDER BY id_danhmuc DESC";
        $query_danhmuc = mysqli_query($mysqli, $sql_danhmuc);
        while($row_danhmuc = mysqli_fetch_array($query_danhmuc)){
        ?>
        <option value="<?php echo $row_danhmuc['id_danhmuc']  ?>"><?php echo $row_danhmuc['tendanhmuc']  ?></option>
        <?php
        }
        ?>
      </select>
    </td>
  </tr>
  <tr>
    <td>Tình trạng</td>
    <td>
      <select name="tinhtrang">
        <option value="1">Kích hoạt</option>
        <option value="0">Ẩn</option>
      </select>
    </td>
  </tr>
  <tr>
    <td>Lệnh</td>
    <td><input type="submit" name="themsanpham" value="Thêm sản phẩm"></td>
  </tr>
  </form>
</table>