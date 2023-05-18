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
        $user = mysqli_fetch_assoc($result);
        $isLogin = password_verify($password, $user['password']);
        // Verify the password
        if ($isLogin == true) {
            $_SESSION["isLogin"] = $isLogin;
            $_SESSION['user_id'] = $user['uid'];
            $_SESSION['email'] = $user['email'];
            $_SESSION['name'] = $user['name'];
            header("Location: index.php");
            exit(); // terminate the script
        } 
        else {
            $_SESSION['error'] = "Wrong credentials.";
            // header("Location: ../login.php");
            // exit(); // terminate the script
        }
    } else {
        $_SESSION['error'] = "Something went wrong please try again.";
        header("Location: user_login.php");
        exit(); // terminate the script
    }
}
if(isset($_POST['login_placeowner'])){
        $email = $_POST['email'];
        $password = $_POST['password']; // get the plain password
        // $passwordHash = password_hash($_POST['password'], PASSWORD_DEFAULT);
        // echo $passwordHash;
        $sql = "SELECT * FROM `place_owner` WHERE `email` = '$email' AND `password`='$password'";
        $result = mysqli_query($conn, $sql);
    
        $count = mysqli_num_rows($result); 
        if (mysqli_num_rows($result) == 1) {
            $placeowner = mysqli_fetch_assoc($result);
        
            
            if ($count == 1) {
                $_SESSION["placeowner"] = true;
                $_SESSION['placeowner_id'] = $placeowner['pid'];
                $_SESSION['email'] = $placeowner['email'];
                $_SESSION['name'] = $placeowner['name'];
                header("Location: placeowner_profile.php");
                exit(); // terminate the script
            } 
            else {
                $_SESSION['error'] = "Wrong credentials.";
                header("Location: login.php");
                exit(); // terminate the script
            }
        } else {
            $_SESSION['error'] = "Something went wrong please try again.";
            header("Location: login.php");
            exit(); // terminate the script
        }
    

}
