 <?php
function redirect() {
    ob_start();
    header('Location:login.php');
    ob_end_flush();
    die();
}
redirect();
?> 
