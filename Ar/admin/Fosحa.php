<!DOCTYPE html>
<html>

<?php include("php-includes/head-tags.php"); ?>
<body>

<?php include("php-includes/navbar.php"); ?>

<!-- Hero Start -->
<section class="home-slider position-relative" id="home">
            <div id="carouselExampleInterval" class="carousel slide carousel-fade" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active" data-bs-interval="3000">
                        <div class="bg-home d-flex align-items-center" style="background: url('images/Cairo-Egypt.jpg') center center;">
                            <div class="bg-overlay bg-linear-gradient"></div>
                            <div class="container">
                                <div class="row justify-content-center">
                                    <div class="col-lg-12 text-center">
                                        <div class="title-heading mt-4">
                                            <h5 class="text-light title-dark animated fadeInDownBig animation-delay-1">Welcome to Our Website</h5>
                                            <h1 class="display-1 fw-semibold text-uppercase mb-3 text-white text-shadow-dark-lg title-dark animated fadeInUpBig animation-delay-3">Touristic Places</h1>
                                            <p class="para-desc text-white-50 para-dark mx-auto animated fadeInUpBig animation-delay-5">Touristic Places are places that people visit for pleasure and interest, usually while they are on holiday</p>
                                            <div class="mt-4 pt-2 animated fadeInUpBig animation-delay-7">
                                                <a href="Touristic_Places.php" class="btn btn-font-sm btn-pills-0 btn-lg btn-light text-uppercase mt-2">View more</a>
                                            </div>
                                        </div>
                                    </div><!--end col-->
                                </div><!--end row-->
                            </div><!--end container-->
                        </div><!--end slide-->
                    </div>


                    <div class="carousel-item" data-bs-interval="3000">
                        <div class="bg-home d-flex align-items-center" style="background: url('images/coworking.jpg') center center ;">
                            <div class="bg-overlay bg-linear-gradient"></div>
                            <div class="container">
                                <div class="row justify-content-center">
                                    <div class="col-lg-12 text-center">
                                        <div class="title-heading mt-4">
                                            <h5 class="text-light title-dark animated fadeInDownBig animation-delay-1">Welcome to our comfortable corner</h5>
                                            <h1 class="display-1 fw-semibold text-uppercase mb-3 text-white text-shadow-dark-lg title-dark animated fadeInUpBig animation-delay-3">Co_Working Places</h1>
                                            <p class="para-desc text-white-50 para-dark mx-auto animated fadeInUpBig animation-delay-5">Co_Working Places are an environment that's designed to accommodate people from different companies who come to do work.</p>
                                            <div class="mt-4 pt-2 animated fadeInUpBig animation-delay-7">
                                                <a href="Co_Working_Places.php" class="btn btn-font-sm btn-pills-0 btn-lg btn-light text-uppercase mt-2">View More</a>
                                            </div>
                                        </div>
                                    </div><!--end col-->
                                </div><!--end row-->
                            </div><!--end container-->
                        </div><!--end slide-->
                    </div>

                    <div class="carousel-item" data-bs-interval="3000">
                        <div class="bg-home d-flex align-items-center" style="background: url('images/adventure.jpg') center center;">
                            <div class="bg-overlay bg-linear-gradient"></div>
                            <div class="container">
                                <div class="row justify-content-center">
                                    <div class="col-lg-12 text-center">
                                        <div class="title-heading mt-4">
                                            <h5 class="text-light title-dark animated fadeInDownBig animation-delay-1">Welcome to our funny corner</h5>
                                            <h1 class="display-1 fw-semibold text-uppercase mb-3 text-white text-shadow-dark-lg title-dark animated fadeInUpBig animation-delay-3">Adventure Places</h1>
                                            <p class="para-desc text-white-50 para-dark mx-auto animated fadeInUpBig animation-delay-5">Adventure Places offering a variety of outdoor entertainments involving physical challenges & often undertaken to create psychological arousal.</p>
                                            <div class="mt-4 pt-2 animated fadeInUpBig animation-delay-7">
                                                <a href="Adventure_Places.php" class="btn btn-font-sm btn-pills-0 btn-lg btn-light text-uppercase mt-2">View More</a>
                                            </div>
                                        </div>
                                    </div><!--end col-->
                                </div><!--end row-->
                            </div><!--end container-->
                        </div><!--end slide-->
                    </div>

                    <div class="carousel-item" data-bs-interval="3000">
                        <div class="bg-home d-flex align-items-center" style="background: url('images/start02.jpg') center center;">
                            <div class="bg-overlay bg-linear-gradient"></div>
                            <div class="container">
                                <div class="row justify-content-center">
                                    <div class="col-lg-12 text-center">
                                        <div class="title-heading mt-4">
                                            <h5 class="text-light title-dark animated fadeInDownBig animation-delay-1">Welcome to our delicious corner</h5>
                                            <h1 class="display-1 fw-semibold text-uppercase mb-3 text-white text-shadow-dark-lg title-dark animated fadeInUpBig animation-delay-3">Restaurants & Cafes</h1>
                                            <p class="para-desc text-white-50 para-dark mx-auto animated fadeInUpBig animation-delay-5">Restaurants & Cafes prepare and serves food and drinks to customers.including a wide variety of cuisines and service models.</p>
                                            <div class="mt-4 pt-2 animated fadeInUpBig animation-delay-7">
                                                <a href="Restaurants&Cafes.php" class="btn btn-font-sm btn-pills-0 btn-lg btn-light text-uppercase mt-2">View More</a>
                                            </div>
                                        </div>
                                    </div><!--end col-->
                                </div><!--end row-->
                            </div><!--end container-->
                        </div><!--end slide-->
                    </div>
                    </div>
                <a class="carousel-control-prev" href="#carouselExampleInterval" role="button" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleInterval" role="button" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </a>
            </div>
            </section><!--end section-->
        <!-- Hero End -->



        <?php include("php-includes/footer.php"); ?>





        <?php include("php-includes/scripts.php"); ?>
</body>
</html>