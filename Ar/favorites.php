<?php require_once("php-functions/connection.php"); ?>


<!DOCTYPE html>
<html>

<?php include("php-includes/head-tags.php"); ?>

<body>
<?php include("php-includes/navbar.php"); ?>

<!-- Hero Start -->
<section class="bg-half-170 d-table w-100" style="background: url('Images/favorites.jpg') center ; ">
            <div class="bg-overlay bg-gradient-overlay"></div>
            <div class="container">
                <div class="row mt-5 justify-content-center">
                    <div class="col-12">
                        <div class="title-heading text-center">
                            <h5 class="heading fw-semibold mb-0 page-heading text-white title-dark">المفضل</h5>
                        </div>
                        
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end container-->
        </section><!--end section-->
        <!-- Hero End -->



<section>
    
    <div class="container">
    <div class="row justify-content-center">
    <?php 
                if(isset($_SESSION['user_id'])){
                    // Query to retrieve places data related to the user's favorites
                    $sql = "SELECT places.*, categories.type_of_place 
                    FROM places
                    INNER JOIN favorites ON places.id = favorites.place_id
                    INNER JOIN categories ON places.category = categories.cid
                    WHERE favorites.user_id = " . $_SESSION['user_id'];
            
                    $result = mysqli_query($conn, $sql);
                
                    while($place = mysqli_fetch_array($result)) {
                    
                    ?>
                    <div class="col-lg-4 col-md-6 mt-4 pt-2">
                        <div class="card blog blog-primary shadow rounded overflow-hidden">
                            <div class="image position-relative overflow-hidden">
                            <img src="Images/<?php echo $place['images']?>" class="img-fluid" alt="">
                                <!--button el favorite-->
                               
                                <button type="button" onclick="addToFav(<?php echo $place['id']?>)" class="favorite-btn">
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
                                <p class="text-muted mt-2 mb-2"><?php echo $place['type_of_place'] ?></p> <!--city-->
                                <a href="place-details.php?placeid=<?php echo $place['id'] ?>" class="link text-dark">Read More <i class="uil uil-arrow-right align-middle"></i></a>
                            </div>

                            <!-- <div class="center">
                                <b>Reviews</b>
                                <div class="star-rating">
                            <input type="radio" id="star5" name="rating" value="5"><label for="star5"></label>
                            <input type="radio" id="star4" name="rating" value="4"><label for="star4"></label>
                            <input type="radio" id="star3" name="rating" value="3"><label for="star3"></label>
                             <input type="radio" id="star2" name="rating" value="2"><label for="star2"></label>
                             <input type="radio" id="star1" name="rating" value="1"><label for="star1"></label>
                                </div>


                               </div> -->


                        </div>


                    </div><!--end col-->
                    <?php 
                    
                    }
                }          
                    ?>
</div>                                     

</div><!--end row-->
</section>




















<?php include("php-includes/scripts.php"); ?>


</body>
</html>