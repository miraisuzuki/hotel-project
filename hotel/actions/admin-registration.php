<?php

include "../classes/admin.php";

$username = $_POST['username'];
$password = $_POST['password'];


$admin= new Admin;
$admin->createAdminUser($username,$password);

?>