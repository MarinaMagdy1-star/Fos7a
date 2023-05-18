<?php

if(isset($_POST['accept_place'])){
    $id = $_POST['id'];
    $accept_place_stat = "UPDATE `places` SET `place_status`='1' WHERE `id`='$id'";  
    $accept_query = mysqli_query($conn, $accept_place_stat);
    if(!$accept_query){
        die('Error in update query');
    }else{
        $success = "Status accepted";   
    }  
}
if(isset($_POST['reject_place'])){
    $id = $_POST['id'];
    $reject_place_stat = "UPDATE `places` SET `place_status`='0' WHERE `id`='$id'";  
    $reject_query = mysqli_query($conn, $reject_place_stat);
    if(!$reject_query){
        die('Error in update query');
    }else{
        $success = "Status rejected";   
    }  
}