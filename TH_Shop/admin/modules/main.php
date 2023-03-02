<div class="clear"></div>
  <div class="main" >
    <?php 
       if(isset($_GET['active']) && $_GET['query']){
        $tram = $_GET['active'];
        $query = $_GET['query'];
    }
    else{
        $tram = '';
        $query = '';
    }
    if($tram == 'quanlydanhmucsp' && $query=='them') {
        include("modules/quanlydanhmucsp/them.php");
        include("modules/quanlydanhmucsp/lietke.php");
    }
    elseif($tram == 'quanlydanhmucsp' && $query=='sua'){
        include("modules/quanlydanhmucsp/sua.php");  
    }
    elseif($tram == 'quanlysp' && $query=='them'){
        include("modules/quanlysp/them.php");  
        include("modules/quanlysp/lietke.php");  
    }
    elseif($tram == 'quanlysp' && $query=='sua'){
        include("modules/quanlysp/sua.php"); 
    }
    else{
        include("modules/dashboard.php");
    }
    

    ?>
</div>  

