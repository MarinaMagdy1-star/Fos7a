<?php require_once("php-functions/connection.php"); ?>
<?php
if (isset($_POST['place_information'])){
    $Place_name = mysqli_real_escape_string($conn,$_POST['Place_name']);
    $location = mysqli_real_escape_string($conn,$_POST['location']);
    $region = mysqli_real_escape_string($conn,$_POST['region']);
    $category = mysqli_real_escape_string($conn,$_POST['category']);
    $description = mysqli_real_escape_string($conn,$_POST['comment']);
    $images = time() . '-' . $_FILES["placeimages"]["name"];
    $target_dir = "Images/";
    $target_file = $target_dir . basename($images);
    move_uploaded_file($_FILES["placeimages"]["tmp_name"], $target_file);
    $sql = "INSERT INTO places (`name`, `category`, `region`, `location`, `description`,`images`,`owner_id`,`place_status`)
      VALUES('$Place_name','$category','$region','$location','$description','$images',".$_SESSION['placeowner_id'].", 1)";
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
        <!--place information-->
        <!-- Start -->
        <section class="section my-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        

                        <div class="custom-form" >
                            <form method="post" enctype="multipart/form-data" >
                               
                                <div class="row">
                                    
                                    <?php if(isset($_SESSION['error'])) :  ?>
                                        <div class="alert alert-danger" role="alert">
                                        <?php echo $_SESSION['error'];?>
                                        </div>
                                    <?php endif; unset($_SESSION['error']); ?>
                                    

                                   <center> <h3 class="title">Place Information:</h3></center>

                                    <div class="col-md-6">
                                        <br><br>
                                        <div class="mb-3">
                                            <label class="form-label">Place Name <span class="text-danger">*</span></label>
                                                <input name="Place_name" id="Place_name" type="name" class="form-control" required>
                                        </div> 
                                    </div><!--end col-->

                                    <div class="col-md-6">
                                        <br><br>
                                        <div class="mb-3">
                                            <label class="form-label">Your Place Location <span class="text-danger">*</span></label>
                                                <input name="location" id="location" type="url" class="form-control" required>
                                        </div> 
                                    </div><!--end col-->

                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">Region<span class="text-danger">*</span></label>
                                                <input required name="region" id="region" type="text" class="form-control" placeholder="eg:Zamalek">
                                        </div> 
                                    </div><!--end col-->

                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">Place Category <span class="text-danger">*</span></label>
                                            <br>
                                               <select name="category" required>
                                               <?php 


 $categories = "SELECT * FROM `categories`";
$category_query = mysqli_query($conn, $categories) or die('users_error'.mysqli_error());

while($result = mysqli_fetch_array($category_query)){
?>
<option value="<?php echo $result['cid'] ?>"><?php echo $result['type_of_place'] ?>
</option>
<?php
}
?> 
</select> 

                        
                                               <!-- <option value="Touristic" selected> Touristic Places</option>
                                                <option value="Co_Working" > Co_Working Places</option>
                                                <option value="Adventure"  > Adventure Places</option>
                                                <option value="Restaurants & Cafes" > Restaurants & Cafes </option>
                                               </select> -->

                                        </div> 
                                    </div><!--end col-->

                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">Please write your place descreption:<span class="text-danger">*</span></label>
                                                <input required name="comment" id="comment" type="text" row="4" class="form-control" placeholder="Your Answer:">
                                        </div> 
                                    </div><!--end col-->

                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="formFileMultiple">Add your main image:<span class="text-danger">*</span></label>
                                                <input required name="placeimages" id="placeimages" type="file" class="form-control" >
                                        </div> 
                                    </div><!--end col-->

                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">Prices<span class="text-danger">*</span></label>
                                                <input name="price" required id="price" type="text"  class="form-control" placeholder="put a range">
                                        </div> 
                                    </div><!--end col-->
                                    

                                  

                                   
                                    <div class="row">
                                      <div class="col-12">
                                      <div class="d-grid">
                                      <br><br>
                                        <button  type="submit" id="submit_placeinfo" name="place_information" class="btn btn-primary">Submit</button>
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
        
