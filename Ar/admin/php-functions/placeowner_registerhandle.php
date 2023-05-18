<?php require_once("connection.php"); ?>

<?php

if (isset($_POST['user_login'])) {
    $email = $_POST['email'];
    $password = $_POST['password']; // get the plain password
    // $passwordHash = password_hash($_POST['password'], PASSWORD_DEFAULT);
    // echo $passwordHash;
    $sql = "SELECT * FROM `users` WHERE `email` = '$email'";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) == 1) {
        $placeowner = mysqli_fetch_assoc($result);
    
        
        if ($isLogin == true) {
            $_SESSION["isLogin"] = $isLogin;
            $_SESSION['user_id'] = $placeowner['uid'];
            $_SESSION['email'] = $placeowner['email'];
            $_SESSION['name'] = $placeowner['name'];
            header("Location: ../index.php");
            exit(); // terminate the script
        } 
        else {
            $_SESSION['error'] = "Wrong credentials.";
            header("Location: ../login.php");
            exit(); // terminate the script
        }
    } else {
        $_SESSION['error'] = "Something went wrong please try again.";
        header("Location: ../login.php");
        exit(); // terminate the script
    }
}