<?php require_once("php-functions/connection.php"); ?>


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
                                        <button a href="payment.php" type="submit" id="submit_images" name="more_images" class="btn btn-primary">Submit</button>
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