<?php require_once("php-functions/connection.php"); ?>

<!DOCTYPE html>
<html lang="en">
<?php include("php-includes/head-tags.php"); ?>


    <body>

    <?php include("php-includes/navbar.php"); ?>

    <?php if(isset($_SESSION['isLogin'])) :  ?>
                    <li><a href="products?id=<?php echo $_SESSION['user_id'];?>" class="sub-menu-item">Welcome <?php echo $_SESSION['name'];?></a></li>                  
                <?php endif; ?>

                
    <!-- Body of my content -->

        <!-- Start -->
        <section class="section my-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="section-title mb-5 pb-2 text-center">
                            <h4 class="title">Register</h4>
                        </div>
                        <div class="custom-form">
                            <form action="php-functions/register-handle.php" method="post">
                               
                                <div class="row">
                                    
                                    <?php if(isset($_SESSION['error'])) :  ?>
                                        <div class="alert alert-danger" role="alert">
                                        <?php echo $_SESSION['error'];?>
                                        </div>
                                    <?php endif; unset($_SESSION['error']); ?>



                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label class="form-label">Your name <span class="text-danger">*</span></label>
                                                <input name="name" id="name" type="name" class="form-control" placeholder="name :" required>
                                        </div> 
                                    </div><!--end col-->

                                    
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label class="form-label">Your Email <span class="text-danger">*</span></label>
                                                <input name="email" id="email" type="email" class="form-control" placeholder="Email :" required>
                                        </div> 
                                    </div><!--end col-->

                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label class="form-label">Your Password <span class="text-danger">*</span></label>
                                                <input name="password" id="password" type="password" class="form-control" placeholder="password :" required>
                                        </div> 
                                    </div><!--end col-->
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="d-grid">
                                            <button a href="user_login.php" type="submit" id="submit" name="user_register" class="btn btn-primary">Register</button>
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