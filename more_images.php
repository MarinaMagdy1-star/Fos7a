<?php require_once("php-functions/connection.php"); 

if(isset($_POST['more_images'])){
    $image_1 = time() . '-' . $_FILES["image1"]["name"];
    $target_dir = "Images/";
    $target_file = $target_dir . basename($image_1);
    move_uploaded_file($_FILES["image1"]["tmp_name"], $target_file);

    $image_2 = time() . '-' . $_FILES["image2"]["name"];
    $target_dir = "Images/";
    $target_file = $target_dir . basename($image_2);
    move_uploaded_file($_FILES["image2"]["tmp_name"], $target_file);

    $image_3 = time() . '-' . $_FILES["image3"]["name"];
    $target_dir = "Images/";
    $target_file = $target_dir . basename($image_3);
    move_uploaded_file($_FILES["image3"]["tmp_name"], $target_file);

    $image_4 = time() . '-' . $_FILES["image4"]["name"];
    $target_dir = "Images/";
    $target_file = $target_dir . basename($image_4);
    move_uploaded_file($_FILES["image4"]["tmp_name"], $target_file);

    $image_5 = time() . '-' . $_FILES["image5"]["name"];
    $target_dir = "Images/";
    $target_file = $target_dir . basename($image_5);
    move_uploaded_file($_FILES["image5"]["tmp_name"], $target_file);


    $sql = "INSERT INTO `place_images`( `place_id`, `place_owner_id`, `image_1_url`, `image_2_url`, `image_3_url`, `image_4_url`, `image_5_url`)  VALUES(".$_GET['place_id'].", ".$_SESSION['placeowner_id']." ,'$image_1','$image_2','$image_3','$image_4','$image_5')";
    if (mysqli_query($conn, $sql)){
        echo "New record created successfully";
        header('location: payment.php?place_id='.$_GET['place_id']);
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
                            <form method="post" enctype="multipart/form-data">
                               
                                <div class="row">

    <center><h3>Add your place images:</h3></center>


                                         <div class="col-md-6">
                                        <div class="mb-3">
                                            <br><br>
                                            <label class="formFileMultiple">Image 1<span class="text-danger">*</span></label>
                                                <input required name="image1" id="image1" type="file" class="form-control" >
                                        </div> 
                                    </div><!--end col-->

                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <br><br>
                                            <label class="formFileMultiple">Image 2<span class="text-danger">*</span></label>
                                                <input required name="image2" id="image2" type="file" class="form-control" >
                                        </div> 
                                    </div><!--end col-->

                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="formFileMultiple">Image 3<span class="text-danger">*</span></label>
                                                <input required name="image3" id="image3" type="file" class="form-control" >
                                        </div> 
                                    </div><!--end col-->

                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="formFileMultiple">Image 4<span class="text-danger">*</span></label>
                                                <input required name="image4" id="image4" type="file" class="form-control" >
                                        </div> 
                                    </div><!--end col-->

                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="formFileMultiple">Image 5<span class="text-danger">*</span></label>
                                                <input required name="image5" id="image5" type="file" class="form-control" >
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