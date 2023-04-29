<?php require_once("php-functions/connection.php"); ?>
<?php
$sql_query = "SELECT * FROM `places`";
$result =  mysqli_query($conn,$sql_query);
$places = mysqli_fetch_all($result,MYSQLI_ASSOC);
?>


<!DOCTYPE html>
<html lang="en">
<?php include("php-includes/head-tags.php"); ?>

    <body>

    <?php include("php-includes/navbar.php"); ?>
    <!-- Body of my content -->
    <div class="container mt-5">.
    <div class="row justify-content-center">
                <?php foreach($places as $place) :?>
                    <div class="col-lg-4 col-md-6 mt-4 pt-2">
                        <div class="card blog blog-primary shadow rounded overflow-hidden">
                            <div class="image position-relative overflow-hidden">
                                <img src="assets/images/blog/01.jpg" class="img-fluid" alt="">

                                <div class="blog-tag">
                                    <a href="javascript:void(0)" class="badge bg-dark"><?php echo $place['category'] ?></a>
                                </div>
                            </div>

                            <div class="card-body content">
                                <a href="place-details.php?placeid=<?php echo $place['id'] ?>" class="h5 title text-dark d-block mb-0"><?php echo $place['name'] ?></a>
                                <p class="text-muted mt-2 mb-2"><?php echo $place['region'] ?></p>
                            </div>
                        </div>
                    </div><!--end col-->
                    <?php endforeach;?>
    </div>
    </div>
    <?php include("php-includes/footer.php"); ?>
    <?php include("php-includes/scripts.php"); ?>
    
 </body>
</html>