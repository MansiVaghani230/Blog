<?php

include(__DIR__ . './variable.php');

session_start();
 if(!isset($_SESSION['member_name']) && !isset($_SESSION['member_pass'])){
    header ("Location:" . BASE_URL . "/login.php");
 }

//$_SESSION['member_name'] = 'jkdobariya';
//$_SESSION['member_pass'] = md5('Admin@321');


?>
<?php
// include(__DIR__.'..\database.php');
include(__DIR__ . './../database.php');
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Dashboard - SB Admin</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="../assets/css/style.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <?php
            require_once(__DIR__ .'../navbar-top.php');
        ?>
        <div id="layoutSidenav">
        <?php
            require_once(__DIR__ .'../sidebar.php');
        ?>
          <div id="layoutSidenav_content">
                <main>
                <?php
            require_once(__DIR__ .'../sidebar.php');
        ?>
        


