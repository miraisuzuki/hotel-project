<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Add Room Type</title>
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

        <div class="container">
            <div class="row">
                <div class="card mx-auto w-50 border-0" style="font-family:serif">
                    <div class="card-header bg-white border-0">
                        <p class="h1 text-info text-center mt-2 fw-bold"><i class="fa-solid fa-hotel"></i> ADD ROOM TYPE</p>
                    </div>

                    <div class="card-body">
                        <form action="../actions/add-room-type.php" method="post">
                            <div class="row">
                                <label for="room_type" class="form-label text-dark">ROOM TYPE</label>
                                <input type="text" name="room_type" id="room_type" class="form-control mb-3 ms-2" required>

                                <label for="room_size" class="form-label text-dark">ROOM SIZE</label>
                                <div class="input-group mb-3 w-50">
                                    <input type="number" name="room_size" id="room_size" class="form-control" aria-label="Room Size" aria-describedby="sqft" required>
                                    <div class="input-group-append">
                                        <span class="input-group-text" id="sqft">Sq Ft</span>
                                    </div>
                                </div>

                                <label for="num_bed" class="form-label text-dark">NUMBER OF BED</label>
                                <input type="number" name="num_bed" id="num_bed" class="form-control mb-3 ms-2 w-50" required>

                                <label for="num_guest" class="form-label text-dark">NUMBER OF GUEST</label>
                                <div class="input-group mb-3 w-50">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="max">Max.</span>
                                    </div>
                                    <input type="number" name="num_guest" id="num_guest" class="form-control" aria-label="Number of Guest" aria-describedby="max">
                                </div>

                                <label for="room_price" class="form-label text-dark">ROOM PRICE</label>
                                <div class="input-group mb-5 w-50">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="jpy">JPY</span>
                                    </div>
                                    <input type="number" name="room_price" id="room_price"  class="form-control" aria-label="Room Price" aria-describedby="jpy">
                                </div>

                            </div>     

                            <button type="submit" name ="btn_add" class="btn btn-info w-100 mb-5">Add</button>

                        </form>
                    </div>
                </div>
            </div>
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