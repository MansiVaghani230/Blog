<?php 
error_reporting(E_ERROR | E_PARSE);
date_default_timezone_set("Asia/Calcutta");
define('BASE_URL', 'http://localhost/blog/admin');

function filter($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
?>
