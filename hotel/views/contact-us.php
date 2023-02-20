<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Contact Us</title>
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

        <!-- Header -->
        <div class="bg-image pt-5 mb-5 text-center text-white img-fluid" style="background-image: url(../assets/home/bg-home.jpeg); height: 200px;">
            <h1 class="mb-3 pt-5 fs-1 fw-bolder" style="font-family:serif">CONTACT US</h1>
        </div>


        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <label for="name" class="fs-5 mb-2 fw-bold" style="font-family:serif">Your Name:</label>
                    <input type="text" id="name" name="name" class="form-control mb-3">

                    <label for="name" class="fs-5 mb-2 fw-bold" style="font-family:serif">Your Email:</label>
                    <input type="text" id="email" name="email" class="form-control mb-3">

                    <label for="name" class="fs-5 mb-2 fw-bold" style="font-family:serif">Subject:</label>
                    <input type="text" id="subject" name="subject" class="form-control mb-3">
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <label for="name" class="fs-5 mb-2 fw-bold" style="font-family:serif">Message:</label>
                    <textarea type="text" id="message" name="message" rows="8" class="form-control md-textarea w-75 mb-3"></textarea>
                </div>
            </div>

            <a href="../views/home.php" class="btn btn-dark mb-5" style="font-family:serif">SEND</a>
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