<?php require_once("php-functions/connection.php"); ?>
<?php
$placeId = $_GET['placeid'];
$sql_query = "SELECT * FROM `places` WHERE id = $placeId;";
$result =  mysqli_query($conn,$sql_query);
$place = mysqli_fetch_assoc($result);
?>


<!DOCTYPE html>
<html lang="en">
<?php include("php-includes/head-tags.php"); ?>

    <body>

    <?php include("php-includes/navbar.php"); ?>
   
    <!-- Body of my content -->
    <!-- <div class="container">
    <div class="row justify-content-center">
                    <div class="col-lg-4 col-md-6 mt-4 pt-2">
                        <div class="card blog blog-primary shadow rounded overflow-hidden">
                            <div class="image position-relative overflow-hidden">
                                <img src="assets/images/blog/01.jpg" class="img-fluid" alt="">

                                <div class="blog-tag">
                                    <a href="javascript:void(0)" class="badge bg-dark"><?php echo $place['category'] ?></a>
                                </div>
                            </div>

                            <div class="card-body content">
                                <a href="blog-detail-four.html" class="h5 title text-dark d-block mb-0"><?php echo $place['name'] ?></a>
                                <p class="text-muted mt-2 mb-2"><?php echo $place['region'] ?></p>
                            </div>
                        </div>
                    </div>

    </div>
    </div> -->

 <!-- Start -->
 <section class="section">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="tiny-single-item">
                            <?php
                            $images_stat = "SELECT * from `place_images` where place_id='$placeId'";
                            $images_query = mysqli_query($conn, $images_stat) or die('users_error'.mysqli_error());

                            while($result = mysqli_fetch_array($images_query)){
                            ?>
                            <div class="tiny-slide">
                                <img src="Images/<?= $result['image_1_url'] ?>" class="img-fluid " alt="">
                            </div>
                            <div class="tiny-slide">
                                <img src="Images/<?= $result['image_2_url'] ?>" class="img-fluid " alt="">
                            </div>
                            <div class="tiny-slide">
                                <img src="Images/<?= $result['image_3_url'] ?>" class="img-fluid " alt="">
                            </div>
                            <div class="tiny-slide">
                                <img src="Images/<?= $result['image_4_url'] ?>" class="img-fluid " alt="">
                            </div>
                            <div class="tiny-slide">
                                <img src="Images/<?= $result['image_5_url'] ?>" class="img-fluid " alt="">
                            </div>
                            
                            <?php
                            }
                            ?>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end container-->

            <div class="container mt-100 mt-60">
                <div class="row">
                    <div class="col-lg-8 col-md-6">
                        <div class="section-title me-md-4">
                            <h4 class="title mb-4">Project Description</h4>
    
                            <p class="text-muted"> <?php echo $place ['description']  ?>  .</p>
                            <p class="text-muted mb-0">.</p>
                        </div>
                    </div><!--end col-->

                    <div class="col-lg-4 col-md-6 mt-4 pt-2 mt-sm-0 pt-sm-0">
                        <div class="section-title">
                            <h4 class="title mb-4">Place Information</h4>
                        </div>

                        <dl class="row mb-0">
                            <dt class="col-md-4 fw-medium col-5">Prices</dt>
                    
                            <dd class="col-md-8 col-7 text-muted"><?php echo $place ['prices']  ?></dd>

                            <dt class="col-md-4 fw-medium col-5">location:</dt>
                            <dd class="col-md-8 col-7 text-muted"><?php echo $place ['location']  ?></dd>

                            <dt class="col-md-4 fw-medium col-5">Region</dt>
                            <dd class="col-md-8 col-7 text-muted"><?php echo $place ['region']  ?></dd>

                            <dt class="col-md-4 fw-medium col-5"></dt>
                            <dd class="col-md-8 col-7 text-muted"></dd>


                            <dt class="col-md-4 fw-medium col-5"></dt>
                            <dd class="col-md-8 col-7 text-muted"></dd>
                        </dl>
                    </div><!--end col-->

                    <div class="col-12">
                        <div class="mt-5 pt-5 border-top">
                            <ul class="list-unstyled align-items-center social-icon social mb-0">
                                <li class="list-inline-item me-3">Share :</li>
                                <li class="list-inline-item"><a href="javascript:void(0)" class="rounded-pill"><i class="uil uil-facebook-f"></i></a></li>
                                <li class="list-inline-item"><a href="javascript:void(0)" class="rounded-pill mt-1"><i class="uil uil-instagram"></i></a></li>
                                <li class="list-inline-item"><a href="javascript:void(0)" class="rounded-pill mt-1"><i class="uil uil-twitter"></i></a></li>
                                <li class="list-inline-item"><a href="javascript:void(0)" class="rounded-pill mt-1"><i class="uil uil-linkedin"></i></a></li>
                                <li class="list-inline-item"><a href="javascript:void(0)" class="rounded-pill mt-1"><i class="uil uil-dribbble"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div><!--end row-->
            </div><!--end container-->
        </section><!--end section-->
        <!-- End -->

    <?php include("php-includes/footer.php"); ?>
    <?php include("php-includes/scripts.php"); ?>
    
 </body>
</html>