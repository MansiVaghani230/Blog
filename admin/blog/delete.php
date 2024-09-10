<?php
include(__DIR__ . '/../includes/variable.php');
include(__DIR__ . '/../database.php');

// Ensure $conn is not null
if (!$conn) {
    die("Database connection failed.");
}

$id = $_GET['id'];
$sql = "DELETE FROM blog WHERE id='$id'";

if (mysqli_query($conn, $sql)) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}

// Redirect to the blog index page
header("Location: " . BASE_URL . "/blog/index.php");
exit(); // Make sure to exit after header redirection

?>
