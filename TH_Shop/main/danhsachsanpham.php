<?php
 $sql_pro = "SELECT * FROM tbl_sanpham WHERE  tbl_sanpham.id_danhmuc='$_GET[id]' ORDER BY id_sanpham DESC";
 $query_pro = mysqli_query($mysqli,$sql_pro);
//get ten san pham
$sql_cate = "SELECT * FROM tbl_category WHERE  tbl_category.id_danhmuc='$_GET[id]'limit 1";
$query_cate = mysqli_query($mysqli,$sql_cate);
$row_title = mysqli_fetch_array($query_cate);
?>

<div class="grid__column-10">
<h1 class="cart_label" style="font-size:3rem;  color:rgb(238 77 45);  font-weight:400; margin-left: 20px;">
<?php echo $row_title['tendanhmuc']  ?>
</h1>  


                        <div class="home-filter">
                            <span class="home-filter__label">Sắp xếp theo</span>
                            <button class="home-filter_btn btn btn--primary">Phổ biến</button>
                            <button class="home-filter_btn btn ">Mới nhất</button>
                            <button class="home-filter_btn btn">Bán chạy</button>
                            <div class="select-input">
                                <span class="select-input__label">
                                 Giá 
                                </span>
                                <i class="header__search-select-icon fa-solid fa-angle-down"></i>
                                <ul class="select-input__list">
                                    <li class="select-input__item">
                                        <a href="#" class="select-input__item-link">Giá: Từ thấp đến cao</a>
                                    </li>
                                    <li class="select-input__item">
                                        <a href="#" class="select-input__item-link">Giá: Từ cao đến thấp</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="home-filter__page">
                                <span class="home-filter__page-num">
                                    <span class="home-filter__page-current">1</span><span>/</span>
                                   
                                    <span class="home-filter__page-list">14</span>
                                </span>
                            </div>
                            <div class="home-filter__page-control">
                             <a href="" class="home-filter__page-control-link"><i class="home-filter__page-control-icon fa-solid fa-chevron-left"></i></a> 
                             <a href="" class="home-filter__page-control-link"><i class="home-filter__page-control-icon fa-solid fa-chevron-right"></i></a>
                            </div>
                        </div>
                        <div class="home-product">
                            <div class="grid__row"> 
                                
                                <!-- product item -->
                                <?php while( $row_pro = mysqli_fetch_array($query_pro)){
                                     ?>
                                <div class="gird__column-2-4">                        
                                    <a class="home-product-item" href="index.php?quanly=sanpham&id=<?php echo $row_pro['id_sanpham'] ?>">
                                        <div class="home-product-item__img" style=" background-image: url(admin/modules/quanlysp/uploads/<?php echo $row_pro['hinhanh']?>)"></div>
                                        <h4 class="home-product-item-name"><?php echo $row_pro['tensanpham']?></h4>
                                        <div class="home-product-item-price">
                                            <span class="home-product-item-price-old"><span class="price-icon">₫</span><?php echo number_format($row_pro['giasp'],0,',','.') ?></span>
                                            <span class="home-product-item-price-current"><span class="price-icon">₫</span><?php echo number_format($row_pro['giasp'],0,',','.') ?></span>
                                        </div>
                                        <div class="home-product-item__active">
                                            <span class="home-product-item__like home-product-item__like--liked">
                                                <i class="home-product-item__like-icon-fill  fa-solid fa-heart"></i>
                                                <i class="home-product-item__like-icon-empty  fa-regular fa-heart "></i>
                                            </span>
                                            <div class="home-product-item__rating">
                                               <span class="home-product-item__vote">
                                                <!-- voted -->
                                                <i class="home-product-item__vote-star voted fa-solid fa-star"></i>
                                                <i class="home-product-item__vote-star voted fa-solid fa-star"></i>
                                                <i class="home-product-item__vote-star voted fa-solid fa-star"></i>
                                                <i class="home-product-item__vote-star fa-solid fa-star"></i>
                                                <i class="home-product-item__vote-star fa-solid fa-star"></i>
                                                <!-- <i class="fa-solid fa-star"></i> -->
                                            </span> 
                                            </div>
                                            <div class="home-product-item__sold">
                                                <span class="home-product-item__sold-label">Đã bán</span>
                                                <span class="home-product-item__sold-quantity"><?php echo $row_pro['soluong']?></span>
                                            </div>
                                            
                                        </div>
                                        <div class="home-product-item__origin">
                                            <span class="home-product-item__brand"><?php echo $row_title['tendanhmuc']?></span>
                                            <span class="home-product-item__origin-name">Hà Nội</span>
                                        </div>
                                        <div class="home-product-item__favourite">
                                            <i class="home-product-item__favourite-icon  fa-solid fa-check"></i>
                                            <span>Yêu thích</span>
                                        </div>
                                        <div class="home-product-item__sale-off">
                                            <span class="home-product-item__sale-off-percent">10%</span>
                                            <span class="home-product-item__sale-off-label">GIẢM</span>
                                        </div>
                                    </a>
                                </div>
                                <?php
                                } ?>
                            </div>
                        </div>
                        <ul class="pagination home-produc__pagination">
                            <li class="pagination-item">
                                <a href="" class="pagination-item__link">
                                    <i class="pagination-item__icon fa-solid fa-chevron-left"></i>
                                </a>
                            </li>
                            <li class="pagination-item pagination-item--active">
                                <a href="" class="pagination-item__link  ">1</a> 
                            </li>
                            <li class="pagination-item">
                                <a href="" class="pagination-item__link">2</a> 
                            </li>
                            <li class="pagination-item">
                                <a href="" class="pagination-item__link">3</a> 
                            </li>
                            <li class="pagination-item">
                                <a href="" class="pagination-item__link">4</a> 
                            </li>
                            <li class="pagination-item">
                                <a href="" class="pagination-item__link">5</a> 
                            </li>
                            <li class="pagination-item">
                                <a href="" class="pagination-item__link">...</a> 
                            </li>
                            <li class="pagination-item">
                                <a href="" class="pagination-item__link">20</a> 
                            </li>
                            <li class="pagination-item">
                                <a href="" class="pagination-item__link">
                                    <i class="pagination-item__icon fa-solid fa-chevron-right"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
