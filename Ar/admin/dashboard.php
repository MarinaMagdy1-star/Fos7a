<?php require_once("php-functions/connection.php");
include('php-functions/dashboard_function.php') ;
?>



<!DOCTYPE html>
<html>

<?php include("php-includes/head-tags.php"); ?>



<body class="vertical-layout vertical-menu 2-columns menu-expanded fixed-navbar" data-open="click" data-menu="vertical-menu" data-col="2-columns">

<?php include("php-includes/sidebar.php") ?>
    <!-- fixed-top-->
    <?php include("php-includes/navbar.php"); ?>

    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <div class="content-body">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                        
                            <div class="card-header bg-primary bg-darken-2 white text-center card-title-bold text-capitalize">Dashboard</div>
                            <div class="card-content collapse show">
                                <div class="card-body card-dashboard table-responsive">
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="card text-white  bg-info text-center">
                                                <div class="card-header pt-2 pb-1">
                                                    <i class="la la-user mb-1 fa-2x" aria-hidden="true"></i>
                                                    <h4 class="card-title text-white">Users</h4>
                                                </div>
                                                <div class="card-content pt-0 pb-2 collapse show">
                                                    <div class="card-body p-0">
                                                        <h4 class="mb-0 text-white"><?php echo $userId ?></h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-4">
                                            <div class="card text-white  bg-warning text-center">
                                                <div class="card-header pt-2 pb-1">
                                                    <i class="la la-male mb-1 fa-2x" aria-hidden="true"></i>
                                                    <h4 class="card-title text-white">places</h4>
                                                </div>
                                                <div class="card-content pt-0 pb-2 collapse show">
                                                    <div class="card-body p-0">
                                                        <h4 class="mb-0 text-white"><?php echo $places_count ?></h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="card text-white  bg-danger text-center">
                                                <div class="card-header pt-2 pb-1">
                                                    <i class="la la-check mb-1 fa-2x" aria-hidden="true"></i>
                                                    <h4 class="card-title text-white">Place Owners</h4>
                                                </div>
                                                <div class="card-content pt-0 pb-2 collapse show">
                                                    <div class="card-body p-0">
                                                        <h4 class="mb-0 text-white"><?php echo $place_owner_count ?></h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>



                

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    
    </body>
</html>