<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Home</title>
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
                            <li class="nav-item active">
                                <a class="nav-link" href="../views/admin-login.php">Admin</a>
                            </li>
                        </ul>
                    </div>
            </div>
        </nav>
        
        <!-- Header -->
        <div class="bg-image pt-5 mb-5 text-center text-white img-fluid" style="background-image: url(../assets/home/bg-home.jpeg); height: 400px;">
            <h1 class="mb-3 pt-5 fs-1 fw-bolder" style="font-family:serif">Hotel</h1>
            <h1 class="fs-1 fw-bolder" style="font-family:serif">Simple & Nature</h1>
            <p class="text-white-50 pb-2" style="font-family:serif">Tokyo, Japan</p>
            <a href="../views/room-list.php"><button class="btn btn-outline-light" style="font-family:serif">BOOK NOW</button></a>
        </div>

        <!-- Brief Explanation of Hotel -->
        <div class="container my-2">
            <div class="row justify-content-center">
                <div class="col-lg-6" style="font-family:serif">
                    <p class="fs-6 text-secondary">... Do you need a break?</p>
                    <p class="lead">A Perfect Getaway for Relief & Refresh</p>
                    <p class="mb-5">Let's be honest.
                                    <br> 
                                    We can be so busy with school, work, and everyday tasks that we often forget to give ourselves a break. Hotel Simple & Nature is a place you can enjoy a benefit of being surrounded by nature to relax and be relived from stress. You can find nature throughout our property and the simple design of our hotel will never distruct you from the beauty of nature.
                    </p>
                </div>
            </div>
        </div>
     
        <!-- Room List -->
        <div class="container-fluid d-flex justify-content-center pb-5">
            <div class="row">
                <div class="col-md-4">
                    <div class="card" style="width: 18rem">
                        <img src="../assets/home/home-card1.jpeg" class="card-img-top">
                        <div class="card-body text-dark " style="font-family:serif">
                            <h5 class="card-title fs-3">Deluxe Room</h5>
                            <p class="card-text">
                            Deluxe Rooms are the most popular room category with guests.
                            </p>
                            <a href="../views/room-list.php" class="btn btn-outline-dark">VIEW DETAILS</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card" style="width: 18rem">
                        <img src="../assets/home/home-card2.jpeg" class="card-img-top">
                        <div class="card-body text-dark " style="font-family:serif">
                            <h5 class="card-title fs-3">Simple Suite</h5>
                            <p class="card-text">
                            Simple Suites are spacious yet perfect for a couple.
                            </p>
                            <a href="../views/room-list.php" class="btn btn-outline-dark">VIEW DETAILS</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card" style="width: 18rem">
                        <img src="../assets/home/home-card3.jpeg" class="card-img-top">
                        <div class="card-body text-dark " style="font-family:serif">
                            <h5 class="card-title fs-3">Nature Suite</h5>
                            <p class="card-text">
                            Nature Suites have everything you dream about for a luxurious stay.
                            </p>
                            <a href="../views/room-list.php" class="btn btn-outline-dark">VIEW DETAILS</a>
                        </div>
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
