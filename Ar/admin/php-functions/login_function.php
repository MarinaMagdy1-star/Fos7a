<?php

if(isset($_POST['dashboard_login'])){

  $email = $_POST['email'];
  $password = $_POST['password'];

  $select_admin = "SELECT * from `admin` WHERE `email`='$email' AND `password`='$password'";
  $select_result = mysqli_query($conn,$select_admin) or die('Error'.mysqli_error());

  if($select_result){
    while($row = mysqli_fetch_array($select_result)){
        $_SESSION['id'] = $row['aid'];
        $_SESSION['email'] = $row['email'];
        $_SESSION['name'] = $row['name'];
    }
    $count = mysqli_num_rows($select_result);
    if ($count ==1){
        header('location: dashboard.php');
    } 
  }else{
    $login_failed = 'You are not authorized';
  }
}

