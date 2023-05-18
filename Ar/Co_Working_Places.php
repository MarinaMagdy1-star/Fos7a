<?php require_once("php-functions/connection.php"); ?>
<?php
$sql_query = "SELECT * FROM places WHERE category = 'Co_Working Places'";
$result =  mysqli_query($conn,$sql_query);
$places = mysqli_fetch_all($result,MYSQLI_ASSOC);
?>

<!DOCTYPE>
<html>

<?php include("php-includes/head-tags.php"); ?>

<body>
<?php include("php-includes/navbar.php"); ?>


<div class="container mt-100 mt-60">
                <div class="row justify-content-center">
                    <div class="col-12">
                        <div class="section-title text-center mb-4 pb-2">
                            <h4 class="title mb-3">Co-Working Places</h4>
                            <p class="text-muted para-desc mx-auto mb-0">Co-Working Places are an environment that's designed to accommodate people from different companies who come to do work.</p>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->

                <div class="row justify-content-center">
                <?php foreach($places as $place) :?>
                    <div class="col-lg-4 col-md-6 mt-4 pt-2">
                        <div class="card blog blog-primary shadow rounded overflow-hidden">
                            <div class="image position-relative overflow-hidden">
                            <img src="assets/images/touristic_places/el azhar.jpg" class="img-fluid" alt="">
                                   <!--button el favorite-->
                                <button type="button" data-id="${}" class="favorite-btn">
                                    <!--shape of favorite button-->
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bookmark-heart-fill" viewBox="0 0 16 16">
                                  <path d="M2 15.5a.5.5 0 0 0 .74.439L8 13.069l5.26 2.87A.5.5 0 0 0 14 15.5V2a2 2 0 0 0-2-2H4a2 2 0 0 0-2 2v13.5zM8 4.41c1.387-1.425 4.854 1.07 0 4.277C3.146 5.48 6.613 2.986 8 4.412z"/>
                                </svg>
                               </button>

                                <div class="blog-tag">
                                    <a href="javascript:void(0)" class="badge bg-dark"><?php echo $place['name'] ?></a>
                                </div>
                            </div>

                            <div class="card-body content">
                                <a href="blog-detail-four.html" class="h5 title text-dark d-block mb-0"><?php echo $place['name'] ?></a>
                                <p class="text-muted mt-2 mb-2"><?php echo $place['category'] ?></p> <!--city-->
                                <a href="place-details.php?placeid=<?php echo $place['id'] ?>" class="link text-dark">Read More <i class="uil uil-arrow-right align-middle"></i></a>
                            </div>

                            <div class="center">
                                <b>Reviews</b>
                                <div class="stars"> 
                                    <input type="radio" id="five" name="rate" value="5">
                                    <label for="five"></label>
                                    <input type="radio" id="four" name="rate" value="4">
                                    <label for="five"></label>
                                    <input type="radio" id="three" name="rate" value="3">
                                    <label for="five"></label>
                                    <input type="radio" id="two" name="rate" value="2">
                                    <label for="five"></label>
                                    <input type="radio" id="one" name="rate" value="1">
                                    <label for="five"></label>
                                    <spane class="result"></spane>

                                  </div>

                             </div>


                        </div>
                    </div><!--end col-->
                    <?php endforeach;?>

                    </div><!--end row-->
            </div><!--end container-->
        <!--end section-->
        <!-- End Shop Product -->







        <?php include("php-includes/footer.php"); ?>




<?php include("php-includes/scripts.php"); ?>


</body>
</html>