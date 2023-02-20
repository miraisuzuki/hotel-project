<?php

include "../classes/hotel.php";

$room_type = $_POST['room_type'];
$room_size = $_POST['room_size'];
$num_bed = $_POST['num_bed'];
$num_guest = $_POST['num_guest'];
$room_price = $_POST['room_price'];
$room_pic = "default.jpeg";

$hotel = new Hotel;

$hotel->addRoomType($room_type,$room_size,$num_bed,$num_guest,$room_price,$room_pic);

?>