<!DOCTYPE html>
<html lang="en" >
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>admin</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='./css/admin.css'>

</head>
<body>
    <h1 class="title_admin">Welcome to Admin</h1>
    <div class="wrapper">
         <?php
         include("config/config.php");
        include("modules/header.php");
        include("modules/menu.php");
        include("modules/main.php");
        include("modules/footer.php");


    ?>
    </div>
   
</body>
</html>