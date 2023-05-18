<?php require_once("connection.php"); ?>

<?php
// Check if the place ID is provided
if (!isset($_POST['place_id'])) {
    echo "error: place ID not provided";
    exit;
}

// Get the place ID and the user ID
$place_id = $_POST['place_id'];
$user_id = $_SESSION['user_id'];

// Check if the place is already in the user's favorites
$sql = "SELECT * FROM favorites WHERE user_id = $user_id AND place_id = $place_id";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // The place is already in the user's favorites, so remove it
    $sql = "DELETE FROM favorites WHERE user_id = $user_id AND place_id = $place_id";
    mysqli_query($conn, $sql);
    echo "removed from favorites";
} else {
    // The place is not in the user's favorites, so add it
    $sql = "INSERT INTO favorites (user_id, place_id) VALUES ($user_id, $place_id)";
    mysqli_query($conn, $sql);
    echo "added to favorites";
}

mysqli_close($conn);
?>