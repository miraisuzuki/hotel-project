<?php

include "../classes/hotel.php";

$room_id = $_POST['room_id'];
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$phone_number = $_POST['phone_number'];
$email_address = $_POST['email_address'];
$card_number = $_POST['card_number'];

$hotel = new Hotel;

$hotel->registerYourInfo($first_name,$last_name,$phone_number,$email_address,$card_number,$room_id);

?>