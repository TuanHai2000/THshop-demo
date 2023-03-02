<div class="app">
        
        <div class="app__container">
            <div class="grid">
                <div class="grid__row app__content">
<?php
                    // <!-- categoryOfMain -->
include("sidebar/category.php");

if(isset($_GET['quanly'])){
    $tam = $_GET['quanly'];
}
else{
    $tam = '';
}
if($tam == 'danhsachsanpham') {
    include("main/danhsachsanpham.php");
}
elseif($tam == 'giohang'){
    include("main/giohang.php");
}
elseif($tam == 'lienhe'){
    include("main/lienhe.php");
}
elseif($tam == 'sanpham'){
    include("main/sanpham.php");
}
elseif($tam == 'tintuc'){
    include("main/tintuc.php");
}
else{
    include("main/containerOfMain.php");
}



?>
            </div>
            </div>
           
        </div>


</div>