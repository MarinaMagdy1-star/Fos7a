<?php require_once("php-functions/connection.php"); ?>
<?php
                               if (isset($_POST['personal_information'])){
                                $name = mysqli_real_escape_string($conn,$_POST['Placeowner_name']);
                                $password = mysqli_real_escape_string($conn,$_POST['password']);
                                $email = mysqli_real_escape_string($conn,$_POST['placeowner_email']);
                                $phone = mysqli_real_escape_string($conn,$_POST['phonenumber']);
                                $sql = "INSERT INTO place_owner (`name`, `password`,`email`,`phone`) VALUES('$name','$password','$email','$phone')";
                                if (mysqli_query($conn, $sql)){
                                    echo "New record created successfully";
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

    <!--personal information-->
        <!-- Start -->
        <section class="section my-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="section-title mb-5 pb-2 text-center">
                        <h3 class="title">معلومات شخصيه</h3>
                        </div>
                        <div class="custom-form">
                        <form method="post">
                            
            
                                <div class="row">
                                    
                                    <?php if(isset($_SESSION['error'])) :  ?>
                                        <div class="alert alert-danger" role="alert">
                                        <?php echo $_SESSION['error'];?>
                                        </div>
                                    <?php endif; unset($_SESSION['error']); ?>

                                
                                    
                                    

                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">الاسم <span class="text-danger">*</span></label>
                                                <input name="Placeowner_name" id="Placeowner_name" type="text" class="form-control" required>
                                        </div> 
                                    </div><!--end col-->

                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">رقم السري <span class="text-danger">*</span></label>
                                                <input name="password" id="password" type="password" class="form-control" placeholder="رقم السري" required>
                                        </div> 
                                    </div><!--end col-->

                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">الايميل <span class="text-danger">*</span></label>
                                                <input name="placeowner_email" id="placeowner_email" type="email" class="form-control" placeholder="الايميل" required>
                                        </div> 
                                    </div><!--end col-->

                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">رقم الموبيل <span class="text-danger">*</span></label>
                                                <input name="phonenumber" id="phonenumber" type="varchar" class="form-control" required>
                                        </div> 
                                    </div><!--end col-->
                                    <div class="row">
                                      <div class="col-12">
                                      <div class="d-grid">
                                      <br><br>
                                        <button  href="login.php" type="submit" id="submmit_personalinfo" name="personal_information" class="btn btn-primary">تسجيل</button>
                                    </div>
                                 </div>
                            
                                    </div><!--end col-->
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

  



