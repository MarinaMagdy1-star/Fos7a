<?php require_once("connection.php"); ?>

<?php

if (isset($_POST['user_register'])) {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password']; // get the plain password
    $passwordHash = password_hash($_POST['password'], PASSWORD_DEFAULT);
    // echo $passwordHash;
    $sql = "INSERT INTO `users` (`name`, `email`, `password`) VALUES ('$name', '$email', '$passwordHash')";
    $result = mysqli_query($conn, $sql);
    if ($result == 1)
    {
        header("Location: ../user_login.php");
        exit(); // terminate the script
    }
    
}

// 1- connection = > $conn
// 2- SQL Query 
// 3- $results = mysqli_query(conn,sql)
// 4- places kteer => places = mysqli_fetch_all($results, MYSQLI_ASSOC) 
// 5- Select just 1 place kteer => place = mysqli_fetch_assoc($results) 

// SELECT * FROM PLACES WHERE ID = PLACEWANTEDID ?