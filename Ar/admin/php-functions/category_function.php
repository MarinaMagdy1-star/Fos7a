<?php 
    if(isset($_POST['add_category'])){
        $type_of_place = $_POST['type_of_place'];

        $insert_in_cat = "INSERT INTO `categories`(`type_of_place`) VALUES ('$type_of_place')";
        $insert_query = mysqli_query($conn, $insert_in_cat);
        if(!$insert_query){
            die('Error in query');
        }else{
            $success = "Record inserted";   
        }

    }
    if(isset($_POST['delete_category'])){
      $cid = $_POST['cid'];
      $delete_in_cat = "DELETE FROM `categories` WHERE  `cid`='$cid'";  
      $delete_query = mysqli_query($conn, $delete_in_cat);
      if(!$delete_query){
          die('Error in delete query');
      }else{
          $success = "Record deleted";   
      } 
    }
    if(isset($_POST['update_category'])){
        $cid = $_POST['cid'];
        $type_of_place = $_POST['type_of_place'];
        $delete_in_cat = "UPDATE `categories` SET `type_of_place`='$type_of_place' WHERE `cid`='$cid'";  
        $delete_query = mysqli_query($conn, $delete_in_cat);
        if(!$delete_query){
            die('Error in update query');
        }else{
            $success = "Record updated";   
        }  
    }


?>