<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travling</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
</head>

<body>
    <section class="container">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container" style="background-color: #aed9e6c5;">
                <a class="navbar-brand" href="#" style="display: flex; align-items: center;">
                    <img src="images/Travling!.png" alt="Logo" style="height: 30px; margin-right: 10px;">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-between" id="navbarNav">
                    <ul class="navbar-nav mx-auto">
                        <li class="nav-item">
                            <a class="nav-link me-4" href="#product">Product</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link me-4" href="#contact-us">Contact Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link me-4" href="#about-us">About Us</a>
                        </li>
                    </ul>
                    <a class="btn btn-warning" href="#sign-up" style="color: white; font-weight: bold;">Sign Up</a>
                </div>
            </div>
        </nav>

        <div class="container mt-4">
            <div class="row" id="about-us">
                <div class="col-md-6 col-lg-6">
                    <h1 class="mt-5" style="font-weight: bold;">Start your journey by one click, explore beautiful
                        world!</h1>
                    <p class="mt-3">Plan and book your perfect trip with expert advice, travel tips, destination
                        information, and inspiration from us!</p>
                    <div class="d-flex align-items-center mt-3">
                        <a href="#" class="btn btn-dark float-end me-3" style="background-color:black;">
                            <img src="google.png" alt="Google Play" height="30px"></a>
                        <a href="#" class="btn btn-dark float-end" style="background-color:black;">
                            <img src="apple.png" alt="apple" height="30px"></a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 d-flex justify-content-end align-items-end">
                    <div style="position: relative;">
                        <img src="images/people.png" alt="Traveler" style="max-width: 100%; border-radius: 20px;">
                        <div
                            style="position: absolute; bottom:20%; right: -7%;">
                            <img src="images/li river.png" alt="Destination" style="border-radius: 10px;">
                        </div>
                        <div
                            style="position: absolute; top:60%; left: -13%;">
                            <img src="images/explore.png" alt="Destination" style="border-radius: 10px;">
                        </div>
                    </div>
                </div>
            </div>
        </div>
  

        <div class="container mt-5 mb-5 p-5">
            <h2 class="fw-bold">Popular Destinations</h2>
            <p class="text-secondary">Vacations to make your experience enjoyable in Indonesia!</p>
        
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4 mt-3">
                <!-- Card 1 -->
                <div class="col">
                    <div class="card bg-light h-100" style="border-radius: 15px;">
                        <img src="images/card/Flores.png" class="card-img-top img-fluid" alt="Flores Road Trip"
                             style="border-top-left-radius: 15px; border-top-right-radius: 15px;">
                        <div class="card-body">
                            <i class="fa fa-map-marker" aria-hidden="true">
                                <a href="https://www.google.com/search?q=manggarai+barat" target="_blank" class="text-secondary text-decoration-none">Manggarai Barat</a>
                            </i>
                            <h5 class="card-title mt-2">Flores Road Trip 3D2N</h5>
                            <p class="card-text">3 Days</p>
                            <p class="text-primary fw-bold">Rp 6.705.000 /orang</p>
                        </div>
                    </div>
                </div>
        
                <!-- Card 2 -->
                <div class="col">
                    <div class="card bg-light h-100" style="border-radius: 15px;">
                        <img src="images/card/Forrestor.png" class="card-img-top img-fluid" alt="Forrester Glamping"
                             style="border-top-left-radius: 15px; border-top-right-radius: 15px;">
                        <div class="card-body">
                            <i class="fa fa-map-marker" aria-hidden="true">
                                <a href="https://www.google.com/search?q=bogor" target="_blank" class="text-secondary text-decoration-none">Bogor</a>
                            </i>
                            <h5 class="card-title mt-2">Forrester Glamping Co Bogor</h5>
                            <p class="card-text">1 Day</p>
                            <p class="text-primary fw-bold">Rp 1.205.000 /malam</p>
                        </div>
                    </div>
                </div>
        
                <!-- Card 3 -->
                <div class="col">
                    <div class="card bg-light h-100" style="border-radius: 15px;">
                        <img src="images/card/Paket.png" class="card-img-top img-fluid" alt="Paket Tiket Pesawat"
                             style="border-top-left-radius: 15px; border-top-right-radius: 15px;">
                        <div class="card-body">
                            <i class="fa fa-map-marker" aria-hidden="true">
                                <a href="https://www.google.com/search?q=jakarta" target="_blank" class="text-secondary text-decoration-none">Jakarta</a>
                            </i>
                            <h5 class="card-title mt-2">Paket Tiket Pesawat Jakarta Bali</h5>
                            <p class="text-primary fw-bold">Rp 605.000 /person</p>
                        </div>
                    </div>
                </div>
        
                <!-- Card 4 -->
                <div class="col">
                    <div class="card bg-light h-100" style="border-radius: 15px;">
                        <img src="images/card/Desa.png" class="card-img-top img-fluid" alt="Desa Wisata Kandri"
                             style="border-top-left-radius: 15px; border-top-right-radius: 15px;">
                        <div class="card-body">
                            <i class="fa fa-map-marker" aria-hidden="true">
                                <a href="https://www.google.com/search?q=kota+semarang" target="_blank" class="text-secondary text-decoration-none">Kota Semarang</a>
                            </i>
                            <h5 class="card-title mt-2">Desa Wisata Kandri</h5>
                            <p class="card-text">14 Days</p>
                            <p class="text-primary fw-bold">Rp 1.400.000 /person</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!----Choose Us-->
        <div class="container" id="product">
            <div class="row align-items-center justify-content-center">
               <div class="col-lg-6 col-md-6 d-none d-md-block">
                    <div class="image text-center">
                        <img src="images/choose.png" alt="Choose us" class="img-fluid" style="max-width: 100%; height: auto;">
                    </div>
                </div>
                <div class="col-lg-5 col-md-6 p-4">
                    <h2 class="fw-bold">Why Choose Us</h2>
                    <p>Enjoy different experiences in every place you visit and discover new and affordable adventures of course.</p>
                    <ul class="list-group">
                        <li class="list-group-item list-group-item-action active text-dark mb-3" aria-current="true" style="background-color:#F0F0F0;border-color: #F0F0F0;">
                            <i class="fa fa-plane me-2" aria-hidden="true"></i>
                            <strong>Flight Ticket</strong><br>
                            <small class="text-muted">Vitae donec pellentesque a aliquam et ultricies auctor.</small>
                        </li>
                        <li class="list-group-item list-group-item-action mb-4" style="background-color: #ffffff;border: #ffffff;">
                            <i class="fa fa-building-o me-2" aria-hidden="true"></i>
                            <strong>Accommodation</strong><br>
                            <small class="text-muted">Vitae donec pellentesque a aliquam et ultricies auctor.</small>
                        </li>
                        <li class="list-group-item list-group-item-action mb-4" style="background-color: #ffffff;border: #ffffff;">
                            <i class="fa fa-briefcase me-2" aria-hidden="true"></i>
                            <strong>Packaged Tour</strong><br>
                            <small class="text-muted">Vitae donec pellentesque a aliquam et ultricies auctor.</small>
                        </li>
                    </ul>
                        <a class="text-dark fw-bold ms-2" href="#" style="text-decoration: none;"> Another Product <i class="fa fa-chevron-right ms-2" aria-hidden="true"></i></a>
                </div>
            </div>
        </div>

        <!--------Plan your vacation-->

        <div class="container" id="contact-us">
            <div class="m-5 justify-content-center">
                <h1 class="text-center">Plan your Vacation</h1>
                <p class="lead text-center">For many people organizing a trip is a headache, Register to be able to
                    jointly<br>determine vacation destinations and dates</p>
            </div>
            <div class="image">
                <img src="images/Map.png" alt="Choose us" style="width:100%;height: 100%;">
            </div>
        </div>

        <!--------Footer-------->

        <footer class="mt-5">
            <div class="container pt-5 pb-4" style="background-color:#42A8C3;border-radius:20px 20px 0 0;">
                <div class="container" style="background-color: #9ad6e6c5; border-radius:15px; border:1px solid whitesmoke;">
                    <div class="row align-items-center">
                        <div class="col-lg-9 col-md-8 text-center mt-4 mb-4">
                            <p class="fs-5">Prepare yourself to be a part of the exploration of</p>
                            <h1 class="fw-bold">The Beauty of Indonesia</h1>
                        </div>
                        <div class="col-lg-3 col-md-4 text-center">
                            <div class="d-grid gap-3 mb-3">
                                <button type="submit" class="btn btn-info fw-bold">Sign In</button>
                                <button type="submit" class="btn btn-light fw-bold" id="sign-up">Sign Up</button>
                            </div>
                        </div>
                    </div>
                </div>
        
                <div class="row mt-4">
                    <div class="col-lg-8 col-md-8 col-sm-12 mt-4 text-center text-md-start">
                        <h2 class="text-white">Traveling!</h2>
                        <nav class="mt-3">
                            <a class="text-white" href="#product" style="margin: 5px 10px;text-decoration: none;">Product</a>
                            <a class="text-white" href="#contact-us" style="margin: 5px 10px;text-decoration: none;">Contact Us</a>
                            <a class="text-white" href="#privacy" style="margin: 5px 10px;text-decoration: none;">Privacy Policy</a>
                            <a class="text-white" href="#about-us" style="margin: 5px 10px;text-decoration: none;">About Us</a>
                        </nav>
                    </div>
        
                    <div class="col-lg-4 col-md-4 col-sm-12 mt-4 text-md-end text-center">
                        <p class="fw-bold text-white text-center">Get the app</p>
                        <a href="#" class="btn btn-dark mb-2" style="background-color:black;">
                            <img src="apple.png" alt="apple" height="30px" width="100px"></a>
                        <a href="#" class="btn btn-dark mb-2" style="background-color: black;">
                            <img src="google.png" alt="Google Play" height="30px" width="100px"></a>
                    </div>
                </div>
        
                
                <div class="row border-top border-white mt-4 pt-3">
                    <div class="col-md-8 text-center text-md-start">
                        <p class="text-white">&copy; 2022 Traveling.com</p>
                    </div>
                    <div class="col-md-4 text-center text-md-end">
                        <a href="#" class="text-white mx-2"><i class="fa fa-instagram fa-2x"></i></a>
                        <a href="#" class="text-white mx-2"><i class="fa fa-twitter-square fa-2x"></i></a>
                        <a href="#" class="text-white mx-2"><i class="fa fa-facebook-square fa-2x"></i></a>
                    </div>
                </div>
            </div>
        </footer>

    </section>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>

</body>

</html>