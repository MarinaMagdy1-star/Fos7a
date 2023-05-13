<?php require_once("php-functions/connection.php"); ?>
<!DOCTYPE>
<html>
<head>
    <?php include("php-includes/head-tags.php"); ?>

</head>
<?php

// $sql_query = "SELECT * FROM `place_owner` WHERE pid = 23;";
// $result =  mysqli_query($conn,$sql_query);
// $place = mysqli_fetch_assoc($result);
?>


<body>
<?php include("php-includes/navbar.php"); ?>

<!-- Hero Start -->
<section class="bg-half-170 d-table w-100" style="background: url('Images/4210db267454aa2ef53c69fd8ce84dd9.jpg') center ; ">
            <div class="bg-overlay bg-gradient-overlay"></div>
            <div class="container">
                <div class="row mt-5 justify-content-center">
                    </div><!--end col-->
                    <div class="position-middle-bottom">
                    <nav aria-label="breadcrumb" class="d-block">
                        <ul class="breadcrumb breadcrumb-muted mb-0 p-0">
                            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">profile</li>
                            <li class="breadcrumb-item"><a href="place_information.php">Add place</a></li>

                        </ul>
                    </nav>
                </div>
                
                </div><!--end row-->
            </div><!--end container-->
        </section><!--end section-->
        <!-- Hero End -->
        <br><br>
        
<!--         
        <section>
            <div class="container">
        <center>
            <nav>

        <dl class="row mb-0">
            <dt class="col-md-4 fw-medium col-5">Name</dt>
        
            <dd class="col-md-8 col-7 text-muted"><?php echo $place ['name']  ?></dd>
        
            <dt class="col-md-4 fw-medium col-5">Your Email:</dt>
            <dd class="col-md-8 col-7 text-muted"><?php echo $place ['email']  ?></dd>
        
            <dt class="col-md-4 fw-medium col-5"> YourNumber</dt>
            <dd class="col-md-8 col-7 text-muted"><?php echo $place ['phone']  ?></dd>
        
            <dt class="col-md-4 fw-medium col-5"></dt>
            <dd class="col-md-8 col-7 text-muted"></dd>
        </dl>
        </nav>
        <h1 class="placeowner_profile">You are one of us now. </h1>
    </center>
    </div>
</section> -->

<section>
            <div class="container">
                <a href="place_information.php" class="btn btn-primary">Add places </a>
                <table class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>status</th>
                            <th>Category</th>
                            <th>image</th>
                            <th>description</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $select_places = "SELECT places.* , categories.type_of_place AS category_name FROM `places` inner join categories on categories.cid = places.category  WHERE owner_id = ".$_SESSION['placeowner_id']."";
                            $select_places_q = mysqli_query($conn, $select_places) OR die('Error on places'.mysqli_error($conn));
                            while($result = mysqli_fetch_array($select_places_q)){

                            if($result['place_status'] == 1){
                                $status = "<span class='badge btn-warning'>Pending</span>";
                            }elseif($result['place_status'] == 2){
                                $status = "<span class='badge btn-success'>Approved</span>";

                            }
                        ?>
                        <tr>
                            <!-- <td><?= $_SESSION['placeowner_id'] ?></td> -->
                            <td><?= $result['id'] ?></td>
                            <td><?= $result['name'] ?></td>
                            <td><?= $status ?></td>
                            <td><?= $result['category_name'] ?></td>
                            <td><img height="100px" width="100px" src="Images/<?= $result['images'] ?>" alt="<?= $result['name'] ?>"/></td>
                            <td><?= $result['description'] ?></td>
                        </tr>
                        <?php 
                            }
                        ?>

                    </tbody>
                </table>

            </div>
</section>








<?php include("php-includes/scripts.php"); ?>
</body>
</html>