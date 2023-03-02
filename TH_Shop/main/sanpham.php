<style>
    .category-heading-main{
    display: flex;
    font-size: 2rem;
    margin-left: 20px;
    margin-top: 10px;
    height:30px;

}

.category-heading-link{
    text-decoration: none;
    margin:0 5px;
}
.category-heading-link:hover{
    color:var(--primary-color);
}
.category-heading-main-icon{
    font-size:1.2rem;
    margin-top: 3px;
}
.product-img{
    overflow: hidden;
    height:400px;
    width: 400px;
    border-top-left-radius:3px;
    border-bottom-left-radius:3px;
}
.product-container{
    border-radius: 3px;
    display:flex;
    background-color: white;
    margin-bottom: 20px;
}
.product-info{
    margin:20px 20px;
}

.product-name{
    font-size:2rem;
    font-weight:400;
    color:var(--text-color);
    margin-bottom: 12px;
}

.product-rate-sanpham{
    display:flex;
    margin-bottom: 12px;
}

.home-product-item__rating-sanpham{
    margin: 0 10px 0 0;
    border-right: 1px solid #b1afaf;
    padding-right:10px;
    padding-top: 2px;
}

.home-product-item__vote-star--sanpham{
    font-size:1.5rem;
}

.home-product-item__sold-sanpham{
    font-size:1.5rem;
    padding-top: 2px;
    margin-left:-2px;
}
.banner-sale{
    width:460px;
   height: 92px;
}
.home-product-item-price{
    background-color:#f5f5f5;
    border-radius:5px;
    padding: 15px 20px;
    margin-bottom:10px;
    
}
.home-product-item-price-old{
    font-size:1.5rem;
}
.home-product-item-price-current{
    font-size:2.3rem;
}

.button-cart{
   margin: 10px 0;
   width: 100%;
   display:flex;
   position: relative;
}
.quantity-product{
    height:40px;
    width: 100%;
    display:flex;
    background-color: wheat;
}

.quantity-form{
    margin: auto;
    font-size:1.2rem;
    color: var(--text-color);
}

.product-available{
margin: auto;
font-size:1.2rem;
    color: var(--text-color);
}




.add-cart{
border:1px solid var(--primary-color);
border-radius: 3px;
height:40px;
width: 200px;
 background-color:#f4e3e3f0;
margin: auto;
font-size: 1.4rem;
padding-right: 28px;
color: var(--primary-color);
font-weight: 400;
cursor: pointer;
}
.button-cart-icon{
position: absolute;
font-size: 1.5rem;
color:var(--primary-color);
top: 14px;
left: 284px;
cursor: pointer;
}

.camket{
    width: 100%;
    border-top: 1px solid #b1afaf ;
    display:flex;
}
.camket-title{
    top:10px;
    font-size:1.3rem;
    color:var(--text-color);
    margin: 0 40px 20px 20px;
    padding-top: 10px;
}
.camket-title i{
    margin:0 5px;
    color:var(--primary-color);
}
.product-details{
  background-color: var(--white-color);
    border-radius: 3px; 
    margin-bottom: 20px;
    padding-bottom: 20px;
}
.product-details-heading{
    padding-top:30px;
    
    
}
.product-details-heading span{
    border-radius: 4px;
    font-size: 2rem;
    color: var(--text-color);
    background-color: #f5f5f5;
    margin: 0 20px;
    padding: 10px 0;
    width: 95%;
    display: block;
    padding-left: 10px;
    border-bottom: 1px solid #f72f2f6b;
}
.product-details-container{
    width: 100%;
    display: flex;
}
.product-details-left{
    width: 65%;
}
.product-details-information{
    margin: 10px 5px 20px 5px;
    font-size: 1.4rem;
    font-weight: 400;
    line-height: 2rem;
}
.product-details-information-full{
    font: 14px/18px Arial,Helvetica,sans-serif;
    font-weight: 300;
    color: #333;
    line-height: 2rem;
    margin-left: 7px;
}
.product-details-right{
    width: 35%;
}
.product-details--item{
    display: flex;
    padding: 5px 10px;
    font: 12px/18px Arial,Helvetica,sans-serif;
    border-bottom: 1px solid #ff9b9b;
    width: 90%;
    font-weight: 300;
}
.product-details--item p{
width: 30%;
}

.product-details--item span{
width: 70%;
}
.other-product{
    height: 30px;
    background-color: var(--white-color);
    border-radius: 3px;
}
</style>
<link rel="stylesheet" href="../assets/css/sanpham.css">

<?php
    $sql_chitiet = "SELECT * FROM tbl_sanpham, tbl_category WHERE tbl_sanpham.id_danhmuc = tbl_category.id_danhmuc AND tbl_sanpham.id_sanpham
    ='$_GET[id]' limit 1";
    $query_chitiet = mysqli_query($mysqli, $sql_chitiet);
 while($row_chitiet=mysqli_fetch_array($query_chitiet)) {
?>
  <div class="grid__column-10">
<div class="category-heading-main">
   <a href="index.php?quanly=danhmucsanpham&id=1" class="category-heading-link">Future</a>
    <i class="fa-solid category-heading-main-icon  fa-chevron-right"></i>
    <a href="index.php?quanly=danhsachsanpham&id=<?php echo $row_chitiet['id_danhmuc'] ?>" class="category-heading-link">Laptop <?php echo $row_chitiet['tendanhmuc'] ?></a> 
</div>
<div class="product-container">
    <img class="product-img"src="admin/modules/quanlysp/uploads/<?php echo $row_chitiet['hinhanh']?>" alt="">
    <form method="POST" action="main/giohang.php?idsanpham=<?php echo $row_chitiet['id_sanpham'] ?>">
    <div class="product-info">
        <div class="product-name"><?php echo $row_chitiet['tensanpham']?></div>
        <div class="product-rate-sanpham">
        <div class="home-product-item__rating-sanpham">
                                               <span class="home-product-item__vote">
                                                <!-- voted -->
                                                <i class="home-product-item__vote-star--sanpham voted fa-solid fa-star"></i>
                                                <i class="home-product-item__vote-star--sanpham voted fa-solid fa-star"></i>
                                                <i class="home-product-item__vote-star--sanpham voted fa-solid fa-star"></i>
                                                <i class="home-product-item__vote-star--sanpham fa-solid fa-star"></i>
                                                <i class="home-product-item__vote-star--sanpham fa-solid fa-star"></i>
                                                <!-- <i class="fa-solid fa-star"></i> -->
                                            </span> 
                                            </div>
                                            <div class="home-product-item__sold-sanpham">
                                                <span class="home-product-item__sold-label">Đã bán</span>
                                                <span class="home-product-item__sold-quantity"><?php echo $row_chitiet['soluong']?></span>
                                            </div>
        </div>
        <div class="home-product-item-price">
                                            <span class="home-product-item-price-old"><span class="price-icon">₫</span><?php echo number_format($row_chitiet['giasp'],0,',','.') ?></span>
                                            <span class="home-product-item-price-current"><span class="price-icon">₫</span><?php echo number_format($row_chitiet['giasp'],0,',','.') ?></span>
        </div>
      <a href=""> <img class="banner-sale"src="assets/img/banner_sale.jpg" alt=""></a>
        <div class="quantity-product">
            <div class="quantity-form">Số lượng :
                <i class="fa-solid quantity-form-icon__add fa-plus"></i>
                <i class="fa-solid quantity-form-icon__minus fa-minus"></i>
            </div>
            <div class="product-available"><?php echo $row_chitiet['soluong'] ?> sản phẩm có sẵn</div>
        </div>
       <div class="button-cart">
        <input class="add-cart" type="submit" value="Thêm vào giỏ hàng" name="themgiohang"><i class="fa-solid button-cart-icon fa-cart-plus"></i>
    </div> 
         <div class="camket">
            <div class="camket-title"><i class="fa-solid fa-arrows-rotate"></i>30 Ngày miễn phí đổi trả</div>
            <div class="camket-title"><i class="fa-solid fa-truck-fast"></i>Miễn phí vận chuyển</div>
         </div>
    </div>
    </form>
</div>
    <div class="product-details">
        <div class="product-details-heading"><span> Thông tin sản phẩm</span></div>
    <div class="product-details-container">
    <div class="product-details-left">
        <div class="product-details-information"><h2><?php echo $row_chitiet['tomtat']?></h2></div>
        <div class="product-details-information-full"><p><?php echo $row_chitiet['noidung']?></p></div>
    
    </div>
    <div class="product-details-right">
        <div class="product-details--item"><p>  Danh mục :</p>     <span>Laptop </span></div>
        <div class="product-details--item"><p>Thương hiệu :</p>    <span><?php echo $row_chitiet['tendanhmuc']?></span></div>
        <div class="product-details--item"><p>Ổ cứng :</p>         <span>chưa rõ</span></div>
        <div class="product-details--item"><p>Màn hình :</p>       <span>16"</span></div>
        <div class="product-details--item"><p> Card màn hình :</p> <span>GTX 1050 Ti</span></div>
        <div class="product-details--item"><p>Ổ cứng :</p>           <span>512 GB SSD NVMe PCIe (Có thể tháo ra, lắp thanh khác tối đa 1 TB)Hỗ trợ thêm 1 khe cắm SSD M.2 PCIe mở rộng (nâng cấp tối đa 1 TB)Hỗ trợ khe cắm HDD SATA (nâng cấp tối đa 2 TB)</span></div>
        <div class="product-details--item"><p> CPU :</p>           <span>Ryzen 55600H3.3GHz</span></div>
        <div class="product-details--item"><p> RAM :</p>             <span>8 GBDDR4 2 khe (1 khe 8 GB + 1 khe rời)3200 MHz</span></div>
        <div class="product-details--item"><p> Hệ điều hành :</p>  <span>Window 11</span></div>

    </div>
    </div>
   </div>
   <div class="product-details"><?php
 $sql_pro = "SELECT * FROM tbl_sanpham,tbl_category WHERE  tbl_sanpham.id_danhmuc=tbl_category.id_danhmuc
 order by tbl_sanpham.id_sanpham  DESC limit 5";
 $query_pro = mysqli_query($mysqli,$sql_pro);

?>
        <div class="product-details-heading"><span> Sản phẩm tương tự</span></div>
        <div class="grid__row"> 
                                
                                <!-- product item -->
                                <?php while( $row = mysqli_fetch_array($query_pro)){
                                     ?>
                                <div class="gird__column-2-4">                        
                                    <a class="home-product-item" href="index.php?quanly=sanpham&id=<?php echo $row['id_sanpham'] ?>">
                                        <div class="home-product-item__img" style=" background-image: url(admin/modules/quanlysp/uploads/<?php echo $row['hinhanh']?>)"></div>
                                        <h4 class="home-product-item-name"><?php echo $row['tensanpham']?></h4>
                                        <div class="home-product-item-price">
                                            <span class="home-product-item-price-old"><span class="price-icon">₫</span><?php echo number_format($row['giasp'],0,',','.') ?></span>
                                            <span class="home-product-item-price-current"><span class="price-icon">₫</span><?php echo number_format($row['giasp'],0,',','.') ?></span>
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
                                                <span class="home-product-item__sold-quantity"><?php echo $row['soluong']?></span>
                                            </div>
                                            
                                        </div>
                                        <div class="home-product-item__origin">
                                            <span class="home-product-item__brand"><?php echo $row['tendanhmuc']?></span>
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

</div>
<?php
    }
?>