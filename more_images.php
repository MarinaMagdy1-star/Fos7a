<?php require_once("php-functions/connection.php"); ?>

<?php
if (isset($_POST['place_information'])){
    $image_1_url	 = mysqli_real_escape_string($conn,$_POST['image_1_url']);
    $image_2_url	 = mysqli_real_escape_string($conn,$_POST['image_2_url']);
    $image_3_url	 = mysqli_real_escape_string($conn,$_POST['image_3_url']);
    $image_4_url	 = mysqli_real_escape_string($conn,$_POST['image_4_url']);
    $image_5_url	 = mysqli_real_escape_string($conn,$_POST['image_5_url']);
    $images = time() . '-' . $_FILES["placeimages"]["name"];
    $target_dir = "Images/";
    $target_file = $target_dir . basename($images);
    move_uploaded_file($_FILES["placeimages"]["tmp_name"], $target_file);
    $sql = "INSERT INTO places (``, `image_1_url`, `image_2_url`, `image_3_url`, `image_4_url`,`image_5_url`)  
                                VALUES('','$image_1_url','$image_2_url','$image_3_url','$image_4_url','$image_1_url',".$_SESSION['placeowner_id'].", 1)";
    if (mysqli_query($conn, $sql)){
        echo "New record created successfully";
        header('location: more_images.php?place_id='.mysqli_insert_id($conn));
        } else {
         echo "Error: " .$sql . "<br>" .mysqli_error($conn);
         }
         mysqli_close($conn);
   }
   ?>
<!DOCTYPE html>
<html lang="en">
<?php include("php-includes/head-tags.php"); ?>
    <body>
    <?php include("php-includes/navbar.php"); ?>
    <!-- Body of my content -->
    <!-- Start -->
    <section class="section my-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        

                        <div class="custom-form" >
                            <form method="post" enctype="multipart/form-data" action ="payment.php">
                               
                                <div class="row">

    <center><h3>Add your place images:</h3></center>


    <div class="col-md-6">
                                        <div class="mb-3">
                                            <br><br>
                                            <label class="formFileMultiple">Image 1<span class="text-danger">*</span></label>
                                                <input name="image1" id="image1" type="file" class="form-control" >
                                        </div> 
                                    </div><!--end col-->

                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <br><br>
                                            <label class="formFileMultiple">Image 2<span class="text-danger">*</span></label>
                                                <input name="image2" id="image2" type="file" class="form-control" >
                                        </div> 
                                    </div><!--end col-->

                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="formFileMultiple">Image 3<span class="text-danger">*</span></label>
                                                <input name="image3" id="image3" type="file" class="form-control" >
                                        </div> 
                                    </div><!--end col-->

                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="formFileMultiple">Image 4<span class="text-danger">*</span></label>
                                                <input name="image4" id="image4" type="file" class="form-control" >
                                        </div> 
                                    </div><!--end col-->

                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="formFileMultiple">Image 5<span class="text-danger">*</span></label>
                                                <input name="image5" id="image5" type="file" class="form-control" >
                                        </div> 
                                    </div><!--end col-->

                                    
                                    <div class="row">
                                      <div class="col-12">
                                      <div class="d-grid">
                                      <br><br>
                                        <button type="submit" id="submit_images" name="more_images" class="btn btn-primary">Submit</button>
                                     </div>
                                 </div>

                                 </div><!--end row-->
                            </form>
                        </div><!--end custom-form-->
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end container-->
        </section><!--end section-->
        <!-- End -->










    <?php include("php-includes/scripts.php"); ?>


    </body>
    </html>