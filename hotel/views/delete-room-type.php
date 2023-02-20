<?php

    include "../classes/hotel.php";

    $hotel = new Hotel;
    $room_details = $hotel->getRoom($_GET['hotel_id']);
    $room_type = $room_details['room_type'];

    // print_r($room_details);

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Delete Room</title>
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
                            <li class="nav-item active">
                                <a class="nav-link" href="../views/room-list.php">Room & Suites</a>
                            </li>
                            <li class="nav-item active">
                                <a class="nav-link" href="../views/contact-us.php">Contact Us</a>
                            </li>
                        </ul>
                    </div>
            </div>
        </nav>

        <main class="container" style="padding-top: 80px; padding-bottom: 80px;">
            <div class="card w-50 mx-auto border-0" style="font-family:serif">
                <div class="card-header bg-white border-0">
                    <h2 class="text-center text-danger fw-bold">DELETE ROOM</h2>
                </div>
                
                <div class="card-body">
                    <div class="text-center mb-4">
                        <i class="fas fa-exclamation-triangle text-warning display-4 d-block mb-2"></i>
                        <p class="fw-bold mb-0">Are you sure you want to delete "<?= $room_type ?>"?</p>
                    </div>

                    <div class="row">
                        <div class="col">
                            <a href="room-list.php" class="btn btn-secondary w-100">Cancel</a>
                         </div>
                        <div class="col">
                            <a href="../actions/delete-room-type.php?hotel_id=<?= $_GET['hotel_id'] ?>" class="btn btn-outline-danger w-100">Delete</a>
                        </div>
                    </div>
                </div>
            </div>
        </main>

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