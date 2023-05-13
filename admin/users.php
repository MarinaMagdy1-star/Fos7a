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
                        <th>Email</th>
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

                    $users = "SELECT * from `users`";
                    $users_query = mysqli_query($conn, $users) or die('users_error'.mysqli_error($conn));

                    while($result = mysqli_fetch_array($users_query)){
                        
                    ?>
                    <tr>
                        <td class="text-bold-500">#<?php echo $result['uid'] ?></td>
                        <td><?php echo $result['name'] ?></td>
                        <td><?php echo $result['email'] ?></td>
                        
                    </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>

            </div>
        </div>
    </div>
    <?php include("php-includes/scripts.php"); ?>

    </body>
</html>