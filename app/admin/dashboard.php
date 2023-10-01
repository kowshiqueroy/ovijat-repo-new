

<?php
session_start();
if ( isset($_SESSION["last_login_time"]) AND (time()- (int)$_SESSION["last_login_time"]) <30 ){ 






echo 'logged in';
echo (time()- (int)$_SESSION["last_login_time"]);
}

else {

    header('location: http://'.$_SERVER['SERVER_NAME'].'/ovi/app/login.php');

}


?>