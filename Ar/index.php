<?php require_once("php-functions/connection.php"); ?>

<!DOCTYPE html>
<html>
<head>

    <?php include("php-includes/head-tags.php"); ?>
</head>
<body>

<?php include("php-includes/navbar.php"); ?>

<!-- Hero Start -->
<section class="home-slider position-relative" id="home">
            <div id="carouselExampleInterval" class="carousel slide carousel-fade" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active" data-bs-interval="3000">
                        <div class="bg-home d-flex align-items-center" style="background: url('assets/images/Cairo-Egypt.jpg') center center;">
                            <div class="bg-overlay bg-linear-gradient"></div>
                            <div class="container">
                                <div class="row justify-content-center">
                                    <div class="col-lg-12 text-center">
                                        <div class="title-heading mt-4">
                                            <h5 class="text-light title-dark animated fadeInDownBig animation-delay-1">أهلا بك في موقعنا</h5>
                                            <h1 class="display-1 fw-semibold text-uppercase mb-3 text-white text-shadow-dark-lg title-dark animated fadeInUpBig animation-delay-3">اماكن السياحيه</h1>
                                            <p class="para-desc text-white-50 para-dark mx-auto animated fadeInUpBig animation-delay-5">الأماكن السياحية هي الأماكن التي يزورها الناس من أجل المتعة والاهتمام ، عادة أثناء وجودهم في عطلة</p>
                                            <div class="mt-4 pt-2 animated fadeInUpBig animation-delay-7">
                                                <a href="places.php?category_id=1" class="btn btn-font-sm btn-pills-0 btn-lg btn-light text-uppercase mt-2">عرض المزيد</a>
                                            </div>
                                        </div>
                                    </div><!--end col-->
                                </div><!--end row-->
                            </div><!--end container-->
                        </div><!--end slide-->
                    </div>


                    <div class="carousel-item" data-bs-interval="3000">
                        <div class="bg-home d-flex align-items-center" style="background: url('assets/images/coworking.jpg') center center ;">
                            <div class="bg-overlay bg-linear-gradient"></div>
                            <div class="container">
                                <div class="row justify-content-center">
                                    <div class="col-lg-12 text-center">
                                        <div class="title-heading mt-4">
                                            <h5 class="text-light title-dark animated fadeInDownBig animation-delay-1">مرحبا بكم في ركننا المريح</h5>
                                            <h1 class="display-1 fw-semibold text-uppercase mb-3 text-white text-shadow-dark-lg title-dark animated fadeInUpBig animation-delay-3">اماكن العمل المشترك</h1>
                                            <p class="para-desc text-white-50 para-dark mx-auto animated fadeInUpBig animation-delay-5">اماكن العمل المشتركه هي بيئة مصممة لاستيعاب الأشخاص من الشركات المختلفة الذين يأتون للقيام بالعمل</p>
                                            <div class="mt-4 pt-2 animated fadeInUpBig animation-delay-7">
                                                <a href="places.php?category_id=2" class="btn btn-font-sm btn-pills-0 btn-lg btn-light text-uppercase mt-2">عرض المزيد</a>
                                            </div>
                                        </div>
                                    </div><!--end col-->
                                </div><!--end row-->
                            </div><!--end container-->
                        </div><!--end slide-->
                    </div>

                    <div class="carousel-item" data-bs-interval="3000">
                        <div class="bg-home d-flex align-items-center" style="background: url('assets/images/adventure.jpg') center center;">
                            <div class="bg-overlay bg-linear-gradient"></div>
                            <div class="container">
                                <div class="row justify-content-center">
                                    <div class="col-lg-12 text-center">
                                        <div class="title-heading mt-4">
                                            <h5 class="text-light title-dark animated fadeInDownBig animation-delay-1">مرحبا بكم في ركننا الممتع</h5>
                                            <h1 class="display-1 fw-semibold text-uppercase mb-3 text-white text-shadow-dark-lg title-dark animated fadeInUpBig animation-delay-3">اماكن المغامرات</h1>
                                            <p class="para-desc text-white-50 para-dark mx-auto animated fadeInUpBig animation-delay-5">أماكن المغامرات التي تقدم مجموعة متنوعة من وسائل الترفيه في الهواء الطلق التي تنطوي على تحديات جسدية والتي يتم إجراؤها غالبًا لخلق إثارة نفسية.</p>
                                            <div class="mt-4 pt-2 animated fadeInUpBig animation-delay-7">
                                            <a href="places.php?category_id=3" class="btn btn-font-sm btn-pills-0 btn-lg btn-light text-uppercase mt-2">عرض المزيد</a>
                                            </div>
                                        </div>
                                    </div><!--end col-->
                                </div><!--end row-->
                            </div><!--end container-->
                        </div><!--end slide-->
                    </div>

                    <div class="carousel-item" data-bs-interval="3000">
                        <div class="bg-home d-flex align-items-center" style="background: url('assets/images/start02.jpg') center center;">
                            <div class="bg-overlay bg-linear-gradient"></div>
                            <div class="container">
                                <div class="row justify-content-center">
                                    <div class="col-lg-12 text-center">
                                        <div class="title-heading mt-4">
                                            <h5 class="text-light title-dark animated fadeInDownBig animation-delay-1">مرحبا بكم في ركننا اللذيذ</h5>
                                            <h1 class="display-1 fw-semibold text-uppercase mb-3 text-white text-shadow-dark-lg title-dark animated fadeInUpBig animation-delay-3">مطاعم وكافيهات</h1>
                                            <p class="para-desc text-white-50 para-dark mx-auto animated fadeInUpBig animation-delay-5">تقوم المطاعم والمقاهي بإعداد وتقديم الأطعمة والمشروبات للعملاء. بما في ذلك مجموعة متنوعة من المأكولات ونماذج الخدمة.</p>
                                            <div class="mt-4 pt-2 animated fadeInUpBig animation-delay-7">
                                                <a href="places.php?category_id=4" class="btn btn-font-sm btn-pills-0 btn-lg btn-light text-uppercase mt-2">عرض المزيد</a>
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