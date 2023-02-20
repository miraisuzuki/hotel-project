<?php

    require "database.php";

    class Hotel extends Database
    {

        public function getAllRoomTypes()
        {
            $sql = "SELECT * FROM room_info";

            if($result=$this->conn->query($sql))
            {
                return $result;
            }
            else
            {
                die("Error Displaying Rooms" . $this->conn->error);
            }
        }

        public function addRoomType($room_type,$room_size,$num_bed,$num_guest,$room_price,$room_pic)
        {
            $sql = "INSERT INTO room_info(`room_type`,`room_size`,`num_bed`,`num_guest`,`room_price`,`room_pic`) VALUES ('$room_type','$room_size','$num_bed','$num_guest','$room_price','$room_pic')";

            if($this->conn->query($sql))
            {
                header("location: ../views/admin-room-list.php");
                exit;
            }
            else
            {
                die("Error Adding Room Type: " . $this->conn->error);
            }
        }

        public function getRoom($room_id)
        {
            $sql = "SELECT * FROM room_info WHERE `id` = $room_id";

            if($result=$this->conn->query($sql))
            {
                return $result->fetch_assoc();
            }
            else
            {
                die("Error Displaying Room" . $this->conn->error);
            }
        }

        public function editRoom($room_id,$room_type,$room_size,$num_bed,$num_guest,$room_price)
        {
            $sql = "UPDATE room_info SET `room_type` = '$room_type', `room_size` = '$room_size', `num_bed` = '$num_bed', `num_guest` = '$num_guest', `room_price` = '$room_price' WHERE id = $room_id";

            if($this->conn->query($sql))
            {
                header("location: ../views/admin-room-list.php");
                exit;
            }
            else
            {
                die("Error Updating Room Details" . $this->conn->error);
            }
        }

        public function uploadPhoto($room_id,$photo_name,$tmp_name)
        {
            $sql="UPDATE room_info SET `room_pic` = '$photo_name' WHERE `id` = $room_id";

            if($this->conn->query($sql))
            {
                $destination= "../assets/room/$photo_name";
                if(move_uploaded_file($tmp_name,$destination))
                {
                    header("location: ../views/admin-room-list.php");
                }
                else
                {
                    die("Error Moving the Photo.");
                }
            }
            else
            {
                die("Error Uploading the Photo: " . $this->conn->error);
            }
        }

        public function deleteRoom($room_id)
        {
            $sql = "DELETE FROM room_info WHERE `id` = '$room_id'";

            if($this->conn->query($sql))
            {
                header("location: ../views/admin-room-list.php");
            }
            else
            {
                die("Error Deleting Rroduct: " . $this->conn->error);
            }
        }

        public function bookRoom($ci_date,$co_date,$guest_id,$room_id)
        {
            $sql = "INSERT INTO booking_info(`ci_date`,`co_date`,`guest_id`,`room_id`) VALUES ('$ci_date','$co_date','$guest_id','$room_id')";

            if($this->conn->query($sql))
            {
                header("location: ../views/confirmation.php?room_id=$room_id&guest_id=$guest_id");
                exit;
            }
            else
            {
                die("Error Booking Room: " . $this->conn->error);
            }
        }

        public function registerYourInfo($first_name,$last_name,$phone_number,$email_address,$card_number,$room_id)
        {
            $sql = "INSERT INTO guest_info(`first_name`,`last_name`, `phone_number`, `email_address`, `card_number`) VALUES ('$first_name','$last_name', '$phone_number', '$email_address', '$card_number')";

            if($this->conn->query($sql))
            {
                $guest_id = $this->conn->insert_id;
                header("location: ../views/book-room.php?room_id=$room_id&guest_id=$guest_id");
                exit;
            }
            else
            {
                die("Error Registering Guest Info: " . $this->conn->error);
            }
        }

        public function getGuestInfo($guest_id)
        {
            $sql = "SELECT booking_info.ci_date as 'ci_date',
                           booking_info.co_date as 'co_date',
                           guest_info.first_name as 'first_name',
                           guest_info.last_name as 'last_name'

                    FROM booking_info INNER JOIN guest_info ON booking_info.guest_id = guest_info.id
                    WHERE booking_info.guest_id = $guest_id";

            if($result=$this->conn->query($sql))
            {
                return $result->fetch_assoc();
            }
            else
            {
                die("Error Displaying Stay Dates" . $this->conn->error);
            }
            
        }
        


        
    }

?>