<?php
include(__DIR__ . '/../includes/variable.php');
include(__DIR__ . '/../database.php');

// Get the ID from the URL
$id = $_GET['id'];

// SQL query to delete the record from the 'tags' table
$sql = "DELETE FROM tags WHERE id='$id'";

// Execute the query
if (mysqli_query($conn, $sql)) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}

// Redirect to the index page after deletion
header("Location: " . BASE_URL . "/tags/index.php");
exit; // Ensure no further code is executed after redirection
?>
