<?php
include(__DIR__ . '/../includes/variable.php');
include(__DIR__ . '/../database.php'); // Make sure this path is correct

// Check if the connection was successful
if (!$conn) {
    die("Database connection failed: " . mysqli_connect_error());
}

$id = $_GET['id'];
$id = mysqli_real_escape_string($conn, $id); // Sanitize the input

$sql = "DELETE FROM blogcategory WHERE id='$id'";

if (mysqli_query($conn, $sql)) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}

// Redirect to the blog category index page
header("Location: " . BASE_URL . "/blogcategory/index.php");
exit(); // Ensure to exit after redirection
?>
