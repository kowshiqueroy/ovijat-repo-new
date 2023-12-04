<?php


session_start();
session_destroy();


?>

<p>Loging out....</p>



<?php

header('refresh:1;..\\index.php');

?>