<?php

session_start();
// $_SESSION['username'] = john 

session_unset();
// $_SESSION['username'] = ''

session_destroy();

header("location: ../views/home.php");
exit;


?>