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

  function slug($string){
   return strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '-', $string)));
  }
?>
