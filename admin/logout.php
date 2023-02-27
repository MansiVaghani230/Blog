<?php
include(__DIR__ . '/includes/variable.php');
session_start();
if(isset($_SESSION['member_name']) && isset($_SESSION['member_pass'])){
unset($_SESSION['member_name']);
unset($_SESSION['member_pass']); //session_destroy();
// header ("Location:admin/login.php");
header ("Location:" . BASE_URL . "/login.php");

echo "Please Wait...";
}
else{
header ("Location:" . BASE_URL . "/login.php");
echo "<meta http-equiv='refresh' content='0,login.php' />";
echo "Please Wait...";
}
 ?> 