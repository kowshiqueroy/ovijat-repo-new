

<?php

session_start();
if (isset ($_SESSION['last_login_time'])) {
    session_destroy() ;
}



//header('location: logout.php');

?>