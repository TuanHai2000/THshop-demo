<?php
     $sql_danhmuc = "SELECT * FROM tbl_category ORDER BY id_danhmuc DESC";
     $query_danhmuc = mysqli_query($mysqli, $sql_danhmuc);
                          
?>
<div class="grid__column-2">
                        <nav class="category">
                            <a href="index.php?quanly=danhmucsanpham&id=1" class="category-link" style="text-decoration: none">
                                <h3 class="category-heading category-heading--separate">
                             <i class="category-heading-icon fa-solid fa-list"></i>
                            Tất cả sản phẩm
                            </h3>
                            </a>
                            
                            <ul class="category-list">

                               
                                <?php
                                 while($row_danhmuc = mysqli_fetch_array($query_danhmuc))
                                 {
                                ?>
                                <li class="category-item category-item--active">
                                    <a href="index.php?quanly=danhsachsanpham&id=<?php echo $row_danhmuc['id_danhmuc']  ?>" class="category-item-link category-item-link-active">
                                        <span class="category-item-link-icon-active"><i class="category-item-link-icon fa-solid fa-chevron-right"></i></span>
                                       <?php
                                    echo $row_danhmuc['tendanhmuc'];
                                       ?>
                                    </a>
                                </li>
                                <?php
                                 }
                                 ?>
                                
                                <li class="category-item category-item--active">
                                    <a href="index.php?quanly=lienhe" class="category-item-link category-item-link-active">
                                        <span class="category-item-link-icon-active"><i class="category-item-link-icon fa-solid fa-chevron-right"></i></span>
                                        Liên hệ
                                    </a>
                                </li>
                                <li class="category-item category-item--active">
                                    <a href="index.php?quanly=tintuc" class="category-item-link category-item-link-active">
                                        <span class="category-item-link-icon-active"><i class="category-item-link-icon fa-solid fa-chevron-right"></i></span>
                                        Tin tức
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    