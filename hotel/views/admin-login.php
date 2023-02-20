<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Log In</title>
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

       <div class="container">
            <div class="row">
                <div class="card w-50 mx-auto border-0">
                    <div class="card-header bg-white border-0">
                        <p class="h1 text-primary text-center mt-2 fw-bold" style="font-family:serif"><i class="fa-solid fa-right-to-bracket"></i> LOG IN</p>
                        <p class="text-primary text-center mt-2 fs-6" style="font-family:serif">FOR ADMIN USERS ONLY</p>
                    </div>

                    <div class="card-body">
                        <form action="../actions/admin-login.php" method="post" class="w-75 mx-auto">
                            <div class="row mb-3 g-2">
                                <label for="username" class="form-label text-dark col-md-3 text-md-end pt-2" style="font-family:serif">Username</label>
                                <div class="col-md-8">
                                    <input type="text" name="username" placeholder="USERNAME" class="form-control mb-2" style="font-family:serif" required autofocus>
                                </div>
                            </div>
                            <div class="row mb-3 g-2">
                                <label for="password" class="form-label text-dark col-md-3 text-md-end pt-2" style="font-family:serif">Password</label>
                                <div class="col-md-8">
                                    <input type="password" name="password" placeholder="PASSWORD" class="form-control" style="font-family:serif">
                                </div>

                            <div class="row mb-3 g-2">
                                <div class="col-md-8 offset-md-3">
                                    <button type="submit" class="btn btn-primary w-100 mb-3" style="font-family:serif">Log In</button>
                                <div>
                            <div>
                        </form>

                        <div class="text-center mt-3">

                            <a href="../views/admin-registration.php" class="medium" style="font-family:serif">Create Account</a>
                        </div>

                        
                        
                    </div>
                </div>
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
       
    </body>
</html>