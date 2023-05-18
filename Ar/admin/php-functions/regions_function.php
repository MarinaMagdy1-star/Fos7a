<?php 
    if(isset($_POST['add_region'])){
        $region_name = $_POST['rname'];

        $insert_in_region = "INSERT INTO `regions`(`rname`) VALUES ('$region_name')";
        $insert_query = mysqli_query($conn, $insert_in_region);
        if(!$insert_query){
            die('Error in query');
        }else{
            $success = "Record inserted";   
        }

    }
    if(isset($_POST['delete_region'])){
      $rid = $_POST['rid'];
      $delete_in_region = "DELETE FROM `regions` WHERE  `rid`='$rid'";  
      $delete_query = mysqli_query($conn, $delete_in_region);
      if(!$delete_query){
          die('Error in delete query');
      }else{
          $success = "Record deleted";   
      } 
    }
    if(isset($_POST['update_region'])){
        $rid = $_POST['rid'];
        $region_name = $_POST['rname'];
        $delete_in_cat = "UPDATE `regions` SET `rname`='$region_name' WHERE `rid`='$rid'";  
        $delete_query = mysqli_query($conn, $delete_in_region);
        if(!$delete_query){
            die('Error in update query');
        }else{
            $success = "Record updated";   
        }  
    }


?>