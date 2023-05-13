<?php require_once("php-functions/connection.php"); 
include('php-functions/regions_function.php')
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
            <?php if(isset($success)) { ?>
            <div class="alert alert-success" role="alert">
                <strong><?php echo $success ?></strong>
            </div>
            <?php } ?>
            <button class="btn btn-primary mb-4" data-toggle="modal" data-target="#add_category">Add Region</button>

            <table class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Action</th>

                    </tr>
                </thead>
                <tbody>
                    <?php 

                    $regions = "SELECT * from `regions`";
                    $regions_query = mysqli_query($conn, $regions) or die('users_error'.mysqli_error());

                    while($result = mysqli_fetch_array($regions_query)){

                    ?>
                    <tr>
                        <td class="text-bold-500">#<?php echo $result['rid'] ?></td>
                        <td><?php echo $result['rname'] ?></td>
                        <td class="d-flex">


                        <button  data-toggle="modal" data-target="#update_category<?php echo $result['rid'] ?>" class="pl-0 btn btn-info"><i class=" fa fa-edit font-medium-1"></i></button>


                        <form  method="post">
                            <input type="hidden" name="rid" id="rid" value="<?php echo $result['rid'] ?>">
                            <button name="delete_region" type="submit" class="pl-0 btn btn-danger" onclick="return confirm('Are you want to delete <?php echo $result['rname']
                                ?>')"><i class="fa fa-trash font-medium-1"></i></button>
                        </form>
                        </td>
                    </tr>
                    <div id="update_region<?php echo $result['rid'] ?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="my-modal-title" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="my-modal-title">Update product</h5>
                                    <button class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form method="POST" enctype="multipart/form-data">
                                    <div class="row">
                                        <input type="hidden" name="rid" value="<?php echo $result['cid'] ?>">
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="name">Name</label>
                                                <input id="name" class="form-control" type="text" name="type_of_place" value="<?php echo $result['type_of_place'] ?>" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit" name="update_region" class="btn btn-primary">Update category</button>
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                    }
                    ?>
                </tbody>
            </table>

            </div>
        </div>
    </div>
    <div id="add_category" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="my-modal-title" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="my-modal-title">Add Region</h5>
                    <button class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="POST" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <label for="rname">Name</label>
                                <input id="rname" class="form-control" type="text" name="rname" required>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" name="add_region" class="btn btn-primary">Add Region</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <?php include("php-includes/scripts.php"); ?>

    </body>
</html>