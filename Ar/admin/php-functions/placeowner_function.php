<?php

if(isset($_POST['accept_place'])){
    $pid = $_POST['pid'];
    $accept_place_stat = "UPDATE `place_owner` SET `status`='1' WHERE `pid`='$pid'";  
    $accept_query = mysqli_query($conn, $accept_place_stat);
    if(!$accept_query){
        die('Error in update query');
    }else{
        $success = "Status accepted";   
    }  
}
if(isset($_POST['reject_place'])){
    $pid = $_POST['pid'];
    $reject_place_stat = "UPDATE `place_owner` SET `status`='0' WHERE `pid`='$pid'";  
    $reject_query = mysqli_query($conn, $reject_place_stat);
    if(!$reject_query){
        die('Error in update query');
    }else{
        $success = "Status rejected";   
    }  
}