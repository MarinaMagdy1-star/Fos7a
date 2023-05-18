<?php require_once("php-functions/connection.php"); 
include('php-functions/category_function.php')
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
            <button class="btn btn-primary mb-4" data-toggle="modal" data-target="#add_category">Add Category</button>

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

                    $categories = "SELECT * from `categories`";
                    $categories_query = mysqli_query($conn, $categories) or die('users_error'.mysqli_error());

                    while($result = mysqli_fetch_array($categories_query)){

                    ?>
                    <tr>
                        <td class="text-bold-500">#<?php echo $result['cid'] ?></td>
                        <td><?php echo $result['type_of_place'] ?></td>
                        <td class="d-flex">


                        <button  data-toggle="modal" data-target="#update_category<?php echo $result['cid'] ?>" class="pl-0 btn btn-info"><i class="badge-circle badge-circle-light-secondary la la-edit font-medium-1"></i></button>


                        <form  method="post">
                            <input type="hidden" name="cid" id="cid" value="<?php echo $result['cid'] ?>">
                            <button name="delete_category" type="submit" class="pl-0 btn btn-danger" onclick="return confirm('Are you want to delete <?php echo $result['type_of_place']
                                ?>')"><i class="la la-trash font-medium-1"></i></button>
                        </form>
                        </td>
                    </tr>
                    <div id="update_category<?php echo $result['cid'] ?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="my-modal-title" aria-hidden="true">
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