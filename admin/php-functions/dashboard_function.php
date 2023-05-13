<?php
$users = "SELECT * FROM `users`";
$users_count = mysqli_query($conn,$users) or die("Error:".mysqli_error($conn)) ;
$userId = mysqli_num_rows($users_count);
// 
$places_stat = "SELECT * FROM `places` WHERE place_status = 2";
$places_q = mysqli_query($conn,$places_stat) or die("Error:".mysqli_error($conn)) ;
$places_count = mysqli_num_rows($places_q);
// 


$place_owner = "SELECT * from `place_owner`";
$place_owner_q = mysqli_query($conn,$place_owner) or die("Error:".mysqli_error($conn)) ;
$place_owner_count = mysqli_num_rows($place_owner_q);

// // 

// $salon_service = "SELECT `id` FROM `salon_service` ORDER BY `id`";
// $salon_service_count = mysqli_query($conn,$salon_service) or die("Error:".mysqli_error($conn)) ;
// $salonServiceId = mysqli_num_rows($salon_service_count);
// 

?>