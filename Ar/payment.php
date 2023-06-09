<!DOCTYPE>
<html>
<?php require_once("php-functions/connection.php");
if (isset($_POST['payment_submit'])){
    $type_of_payment = mysqli_real_escape_string($conn,$_POST['type_payment']);
    $images = time() . '-' . $_FILES["invoice"]["name"];
    $target_dir = "Images/";
    $target_file = $target_dir . basename($images);
    move_uploaded_file($_FILES["invoice"]["tmp_name"], $target_file);
    $sql = "INSERT INTO  subscriptions (`place_owner_id`, `place_id`,`amount`, `type_of_payment`,`image`)
      VALUES(".$_SESSION['placeowner_id'].", ".$_GET['place_id'].",'1700','$type_of_payment ','$images')";
    if (mysqli_query($conn, $sql)){
        header('Location: placeowner_profile.php');
        // echo "New rec\ord created successfully";


    } else {
        echo "Error: " .$sql . "<br>" .mysqli_error($conn);
    }
    // mysqli_close($conn);
   }


?>

<head>
    <?php include("php-includes/head-tags.php"); ?>

</head>

<body class="payment">

<?php include("php-includes/navbar.php"); ?>



<!-- Start -->
<!-- <section class="section">
            <div class="container">
                    <div class="row">
                        <div>
                            <form action ="">
                                <h4 class="mb-3 mt-4 pt-4 border-top">Payment</h4>

                                <div class="my-3">
                                    <div class="form-check">
                                        <input id="credit" name="paymentMethod" type="radio" class="form-check-input"
                                            checked required>
                                        <label class="form-check-label" for="credit">Credit card</label>
                                    </div>
                                    <div class="form-check">
                                        <input id="debit" name="paymentMethod" type="radio" class="form-check-input"
                                            required>
                                        <label class="form-check-label" for="debit">Debit card</label>
                                    </div>
                                    <div class="form-check">
                                        <input id="paypal" name="paymentMethod" type="radio" class="form-check-input"
                                            required>
                                        <label class="form-check-label" for="paypal">PayPal</label>
                                    </div>
                                </div>

                                <div class="row gy-3">
                                    <div class="col-md-6">
                                        <label for="cc-name" class="form-label">Name on card</label>
                                        <input type="text" class="form-control" id="cc-name" placeholder="" required>
                                        <small class="text-muted">Full name as displayed on card</small>
                                        <div class="invalid-feedback">
                                            Name on card is required
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <label for="cc-number" class="form-label">Credit card number</label>
                                        <input type="text" class="form-control" id="cc-number" placeholder="" required>
                                        <div class="invalid-feedback">
                                            Credit card number is required
                                        </div>
                                    </div>

                                    <div class="col-md-3 mb-3">
                                        <label for="cc-expiration" class="form-label">Expiration</label>
                                        <input type="text" class="form-control" id="cc-expiration" placeholder="" required>
                                        <div class="invalid-feedback">
                                            Expiration date required
                                        </div>
                                    </div>

                                    <div class="col-md-3 mb-3">
                                        <label for="cc-cvv" class="form-label">CVV</label>
                                        <input type="text" class="form-control" id="cc-cvv" placeholder="" required>
                                        <div class="invalid-feedback">
                                            Security code required
                                        </div>
                                    </div>
                                </div>

                                <button a href="index.php" class="w-10 btn btn-primary" type="submit">Done</button>
                                
                            </form>
                        </div>
                </div><!--end row-->
                </div><!--end container-->
        </section><!--end section-->
        
<!-- Start -->
<section class="section my-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        

                        <div class="custom-form" >
                            <form method="POST" enctype="multipart/form-data">
                               
                                <div class="row">
        <center><h3 class="title">الدفع</h3></center>

                                        <div class="col-md-6">
                                        <br><br>
                                        <div class="mb-3">
                                            
                                            <label class="form-label">الرجاء تحديد نوع الدفع الخاص بك <span class="text-danger">*</span></label>
                                            <br>
                                               <select name="type_payment" required> 
                                                <option value="Orange" selected> Orange Cash</option>
                                                <option value="Vodafone" > Vodafone Cash</option>
                                                
                            
                                               </select>
                                               </div> 
                                    </div><!--end col-->

                                             
                                        <div class="mb-3">
                                        <br><br>
                                            <label class="formFileMultiple"> الرجاء وضع صوره الفاتورة<span class="text-danger">*</span></label>
                                                <input required name="invoice" id="invoice" type="file" class="form-control" >
                                        </div> 
                                    </div><!--end col-->
                                    <div class="row">
                                    <div class="col-12">
                                        <div class="d-grid">
                                            <button type="submit" id="payment_submit" name="payment_submit" class="btn btn-primary">رفع</button>
                                        </div>
                                        </div><!--end col-->


</form>




</body>

<?php include("php-includes/scripts.php"); ?>
</html>