<?php

    include "../classes/hotel.php";

    $hotel = new Hotel;

    $hotel->deleteRoom($_GET['hotel_id']);

?>