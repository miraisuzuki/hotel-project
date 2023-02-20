<?php

include "../classes/hotel.php";

$room_id = $_GET['hotel_id'];
$photo_name = $_FILES['room_pic']['name'];
$tmp_name = $_FILES['room_pic']['tmp_name'];

$hotel = new Hotel;
$hotel->uploadPhoto($room_id,$photo_name,$tmp_name);

?>