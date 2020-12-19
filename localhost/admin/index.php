<?php
class checkAuth{
    public function isAdmin(){
        if($user === false){
            header('Location: loginadmin.php');
        }
    }
}
$checkAuth = new checkAuth;
$checkAuth->isAdmin();

?>
<!doctype html>
<html>
    <head>
        <title>199Panel 1.0</title>
        <meta charset="UTF-8">
        <link href="css/admin.css" rel="stylesheet">
        <link href="img/php.ico" rel="shortcut icon" type="image/x-icon">
        <link rel="stylesheet" href="../css/header_and_footer.css" type="text/css">
    </head>
    
    <body>
    <?php require_once("parts/header.html"); ?>
    <!-- HTML -->
    <?php require_once("parts/footer.html"); ?>
    </body>
</html>