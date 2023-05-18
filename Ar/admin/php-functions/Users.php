<?php require_once("php-functions/connection.php"); 

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

            <table class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>name</th>
                        <th>status</th>
                        <!-- <th>category</th>
                        <th>region</th>
                        <th>prices</th>
                        <th>location</th>
                        <th>description</th>
                        <th>owner_id</th>
                        <th>place_status</th>
                        <th>images</th> -->
                        
                        

                    </tr>
                </thead>
                <tbody>
                    <?php 

                    $places = "SELECT * from `places`";
                    $places_query = mysqli_query($conn, $places) or die('users_error'.mysqli_error());

                    while($result = mysqli_fetch_array($places_query)){
                        if($result['place_status'] == 1){
                            $status = "<span class='badge badge-success'>Accepted</span> ";
                        }else{
                            $status = "<span class='badge badge-danger'>Rejected</span> ";
                        }
                    ?>
                    <tr>
                        <td class="text-bold-500">#<?php echo $result['id'] ?></td>
                        <td><?php echo $result['name'] ?></td>
                        <td><?php echo $status ?></td>
                        <td class="d-flex">


                        <!-- <button  data-toggle="modal" data-target="#update_place<?php echo $result['id'] ?>" class="pl-0 btn btn-info"><i class="badge-circle badge-circle-light-secondary la la-edit font-medium-1"></i></button> -->

                        <form  method="post">
                            <input type="hidden" name="id" id="id" value="<?php echo $result['id'] ?>">
                            <button name="accept_place" type="submit" class="pl-0 btn btn-success" onclick="return confirm('Are you want to accept <?php echo $result['name']
                                ?>')"><i class="la la-check font-medium-1"></i></button>
                        
                            <button name="reject_place" type="submit" class="pl-0 btn btn-danger" onclick="return confirm('Are you want to reject <?php echo $result['name']
                                ?>')"><i class="la la-times font-medium-1"></i></button>
                        </form>
                        </td>
                    </tr>
                    <div id="update_place<?php echo $result['id'] ?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="my-modal-title" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="my-modal-title">Update place</h5>
                                    <button class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form method="POST" enctype="multipart/form-data">
                                    <div class="row">
                                        <input type="hidden" name="cid" value="<?php echo $result['cid'] ?>">
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="name">Name</label>
                                                <input id="name" class="form-control" type="text" name="type_of_place" value="<?php echo $result['type_of_place'] ?>" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit" name="update_category" class="btn btn-primary">Update category</button>
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
                    <h5 class="modal-title" id="my-modal-title">Add Category</h5>
                    <button class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="POST" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <label for="type_of_place">Name</label>
                                <input id="type_of_place" class="form-control" type="text" name="type_of_place" required>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" name="add_category" class="btn btn-primary">Add Category</button>
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