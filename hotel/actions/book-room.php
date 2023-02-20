<?php

include "../classes/hotel.php";

$ci_date = $_POST['ci_date'];
$co_date = $_POST['co_date'];
$guest_id = $_POST['guest_id'];
$room_id = $_POST['room_id'];

$hotel = new Hotel;

$hotel->bookRoom($ci_date,$co_date,$guest_id,$room_id);

?>