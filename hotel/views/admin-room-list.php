<?php

    session_start();

    include "../classes/hotel.php";

    $hotel = new Hotel;
    $room_list = $hotel->getAllRoomTypes();

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Room List</title>
        <!-- Boostrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <!-- Fontawesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    </head>
    
    <body>
        <!-- Responsive Navbar-->
        <nav class="navbar navbar-expand-lg navbar-light bg-white">
            <div class="container">
                <a class="navbar-brand" href="../views/home.php"><i class="fa-solid fa-tree"></i></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-nav" aria-controls="navbar-nav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                    <div class="collapse navbar-collapse" id="navbar-nav">
                        <ul class="navbar-nav ms-auto mb-lg-0" style="font-family:serif">
                            <p class="fs-6 mt-2 text-dark"><?= $_SESSION['username'] ?></p> 
                            <li class="nav-item active">
                                <a class="nav-link" href="../actions/admin-log-out.php">Log Out</a>
                            </li>
                        </ul>
                    </div>
            </div>
        </nav>
        
        <!-- Room List -->
        <div class="container px-4 px-lg-5 my-5">
        <a href="../views/add-room-type.php"><p class="h3 text-info text-end mt-3"><i class="fa-solid fa-plus"></i></p></a>

        <?php
            while($room_details=$room_list->fetch_assoc())
            {
        ?>
            <div class="row gx-4 gx-lg-5 align-items-center pb-5">
                <div class="col-md-6">
                    <img class="card-img-top mb-5 mb-md-0" src="../assets/room/<?= $room_details['room_pic'] ?>" alt="Room Picture">
                </div>
                <div class="col-6">
                    <table class="table table-borderless fs-6" style="font-family:serif">
                        <tr>
                            <th width="40%">ROOM TYPE - </th>
                            <td><?= $room_details['room_type'] ?></td>
                        </tr>
                        <tr>
                            <th width="40%">ROOM SIZE - </th>
                            <td><?= $room_details['room_size'] ?> Sq Ft</td>
                        </tr>
                        <tr>
                            <th width="40%">NUMBER OF BED - </th>
                            <td><?= $room_details['num_bed'] ?></td>
                        </tr>
                        <tr>
                            <th width="40%">NUMBER OF GUEST - </th>
                            <td>Max. <?= $room_details['num_guest'] ?></td>
                        </tr>
                        <tr>
                            <th width="40%">PRICE PER NIGHT - </th>
                            <td>JPY <?= $room_details['room_price'] ?></td>
                        </tr>
                    </table>
                    
                    <a href="edit-room-type.php?hotel_id=<?= $room_details['id'] ?>" class="btn btn-outline-warning"><i class="fas fa-pencil-alt"></i></a>
                    <a href="delete-room-type.php?hotel_id=<?= $room_details['id'] ?>" class="btn btn-outline-danger"><i class="fas fa-trash-alt"></i></a>

                </div>
            </div>
        <?php
            }
        ?>
        </div>
        
         <!-- Footer-->
         <footer class="py-5 bg-white border-top">
            <div class="container">
                <div class="row">
                    <div class="col-4">
                        <p class="m-0 text-center text-dark fs-1"><i class="fa-solid fa-tree"></i></p>
                        <p class="m-0 text-center text-dark fs-6" style="font-family:serif">Hotel</p>
                        <p class="m-0 text-center text-dark fs-6" style="font-family:serif">Simple & Nature</p>
                    </div>

                    <div class="col-4">
                        <p class="m-0 text-center text-dark fs-5 fw-bold" style="font-family:serif">ADDRESS</p>
                        <p class="m-0 text-center text-dark fs-6" style="font-family:serif">Tokyo, Japan</p>
                    </div>

                    <div class="col-4">
                        <p class="m-0 text-center text-dark fs-5 fw-bold" style="font-family:serif">CONTACT US</p>
                        <p class="m-0 text-center text-dark fs-6" style="font-family:serif">+81 03-1234-5678</p>
                        <p class="m-0 text-center text-dark fs-6" style="font-family:serif">contact@simpleandnature.com</p>
                    </div>
                </div>
            </div>
        </footer>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
       
    </body>
</html>
