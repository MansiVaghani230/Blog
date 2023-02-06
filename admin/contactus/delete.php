<?php
// include(__DIR__.'..\database.php');
include(__DIR__ . './../database.php');

$id = $_GET['id'];
$sql = "DELETE FROM contactus WHERE id='$id'";

if (mysqli_query($conn, $sql)) {
    
  echo "Record deleted successfully";
} else {
  echo "Error deleting record: " . mysqli_error($conn);
}

header("location:../contactus/index.php");

?>