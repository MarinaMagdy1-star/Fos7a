<?php require_once("php-functions/connection.php"); ?>
<!DOCTYPE html>
<html lang="en">

<?php include("php-includes/head-tags.php"); ?>

<body>
<?php include("php-includes/navbar.php"); ?>


<div class="container mt-100 mt-60">
                <div class="row justify-content-center">
                    <div class="col-12">
                    <div class="section-title text-center mb-4 pb-2">
                    <?php 
                    $category = 1; // Default category is Touristic Places
                    
                    if (isset($_GET['category_id'])) {
                        $category_id = $_GET['category_id'];
                        $select_category = "SELECT * FROM `categories` WHERE cid='$category_id '";
                        $selecy_cate_q = mysqli_query($conn, $select_category) or die('Error in cat'.mysqli_error($conn));
                        $result_cate = mysqli_fetch_array($selecy_cate_q);

                        // if ($category_id == 1) {
                        //     $category = 1; // Touristic Places
                        // } elseif ($category_id == 2) {
                        //     $category = 2; // Co-Working Places
                        // } elseif ($category_id == 3) {
                        //     $category = 3; // Restaurants & Cafes
                        // } elseif ($category_id == 4) {
                        //     $category = 4; // Adventure Places
                        // }
                    }
                    
                    // if ($category == 1) {
                    //     echo '<h4 class="title mb-3">Touristic Places</h4>
                    //         <p class="text-muted para-desc mx-auto mb-0">Touristic Places are places that people visit for pleasure and interest, usually while they are on holiday</p>';
                    // } elseif ($category == 2) {
                    //     echo '<h4 class="title mb-3">Co Working Places</h4>
                    //         <p class="text-muted para-desc mx-auto mb-0">Co Working Places are places where people can work in a shared environment with other professionals</p>';
                    // } elseif ($category == 3) {
                    //     echo '<h4 class="title mb-3">Restaurants & cafes</h4>
                    //         <p class="text-muted para-desc mx-auto mb-0">Restaurants & cafes are places where people can eat and drink, usually with friends and family</p>';
                    // } elseif ($category == 4) {
                    //     echo '<h4 class="title mb-3">Adventure Places</h4>
                    //         <p class="text-muted para-desc mx-auto mb-0">Adventure Places are places where people can experience thrilling activities such as hiking, rock climbing, and water sports</p>';
                    // } else {
                    //     echo '<h4 class="title mb-3">Touristic Places</h4>
                    //         <p class="text-muted para-desc mx-auto mb-0">Touristic Places are places that people visit for pleasure and interest, usually while they are on holiday</p>';
                    // }
                    ?>
                    <h4 class="title mb-3"><?= $result_cate['type_of_place'] ?></h4>
                    <p class="text-muted para-desc mx-auto mb-0"><?= $result_cate['description'] ?></p>
                </div>


                    </div><!--end col-->
                </div><!--end row-->


                <div class="row justify-content-center">
                <?php 
                if(isset($_GET['category_id'])){
                    // $sql_query = "SELECT places.*, categories.type_of_place
                    // FROM places 
                    // JOIN categories ON places.category = categories.cid 
                    // WHERE places.category = ".$_GET['category_id']." AND places.place_status = 2;
                    // ";
                    $sql_query = "SELECT * FROM `places` WHERE category = ".$_GET['category_id']." AND place_status = 2";
                    

                    $result =  mysqli_query($conn,$sql_query);
                
                    while($place = mysqli_fetch_array($result)) {
                    
                    ?>
                    <div class="col-lg-4 col-md-6 mt-4 pt-2">
                        <div class="card blog blog-primary shadow rounded overflow-hidden">
                            <div class="image position-relative overflow-hidden">
                                <img src="Images/<?php echo $place['images']?>" class="img-fluid" alt="">
                                

                                <div class="blog-tag">
                                    <a href="javascript:void(0)" class="badge bg-dark"><?php echo $place['name'] ?></a>
                                </div>
                            </div>
                            

                            <div class="card-body content">
                                <!--button el favorite-->
                               
                                <button type="button" onclick="addToFav(<?php echo $place['id']?>)" class="favorite-btn">
                                    <!--shape of favorite button-->
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bookmark-heart-fill" viewBox="0 0 16 16">
                                    <path d="M2 15.5a.5.5 0 0 0 .74.439L8 13.069l5.26 2.87A.5.5 0 0 0 14 15.5V2a2 2 0 0 0-2-2H4a2 2 0 0 0-2 2v13.5zM8 4.41c1.387-1.425 4.854 1.07 0 4.277C3.146 5.48 6.613 2.986 8 4.412z"/>
                                    </svg>
                                </button
                                <p class="h5 title text-dark d-block mb-0"><?php echo $place['name'] ?></p>
                                
                                <a href="place-details.php?placeid=<?php echo $place['id'] ?>" class="link text-dark">Read More <i class="uil uil-arrow-right align-middle"></i></a>
                            </div>
                            
                            <!-- <div class="center">
                                <b>Reviews</b>
                                <div class="star-rating">
                            <input type="radio" id="star5" name="rating" value="5"><label for="star5" title="Excellent"></label>
                            <input type="radio" id="star4" name="rating" value="4"><label for="star4" title="Good"></label>
                            <input type="radio" id="star3" name="rating" value="3"><label for="star3" title="Average"></label>
                             <input type="radio" id="star2" name="rating" value="2"><label for="star2" title="Poor"></label>
                             <input type="radio" id="star1" name="rating" value="1"><label for="star1" title="Terrible"></label>
                                </div>






                               </div> -->


                        </div>


                    </div><!--end col-->
                    <?php 
                    
                    }
                }          
                    ?>
                                     
                </div><!--end row-->
            </div><!--end container-->
        <!--end section-->
        <!-- End Shop Product -->















        <?php include("php-includes/footer.php"); ?>




<?php include("php-includes/scripts.php"); ?>

<script>

function addToFav(placeId) {
  $.ajax({
    type: "POST",
    url: "php-functions/favourites-handle.php",
    data: { place_id: placeId },
    success: function(response) {
      
    }
  });
}

</script>






</body>
</html>