<?php
include(__DIR__ . '/includes/variable.php');
include "database.php";
 session_start();
 if(isset($_SESSION['member_name']) && isset($_SESSION['member_pass'])){
    //   header("location:./dashboard/index.php");
      header ("Location:" . BASE_URL . "/index.php");
 echo "<meta http-equiv='refresh' content='0,index.php' />";
 }
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="shortcut icon" href="./images/fevicon.ico" />
	<link rel="stylesheet" href="./assets/css/bootstrap.min.css" />
	<link rel="stylesheet" href="./assets/css/font-awesome.min.css" />
	<link rel="stylesheet" href="./assets/css/style.css" />
	<link rel="" href="" />
</head>
<body>
	<?php
	$error=NULL;

	?>
	<?php

	if(empty($_REQUEST['username']) && empty($_REQUEST['password']))
	{
		$error=NULL;
	}

	else if(empty($_REQUEST['username']))
	{
		$error="Error : Feel Username";
	}

	else if(empty($_REQUEST['password']))
	{
		$error="Error : Feel password";
	}

	else{

		$username=$_REQUEST['username'];
		$password=$_REQUEST['password']; 
		$username = stripslashes($username);
		$password = stripslashes($password);
// $username = mysqli_real_escape_string($username);
// $password = mysqli_real_escape_string($password);

		$sql="select * from members where member_name='$username' and member_pass=md5('$password') and member_status='a'";
		$result=mysqli_query($conn, $sql);
		$count=mysqli_num_rows($result);
// print_r($result);
// echo $count;
// exit();      
		// $count = 1;
		if($count==1){
			$_SESSION['member_name']=$username;
			$_SESSION['member_pass']=$password;
            header ("Location:" . BASE_URL . "/index.php");
			echo "<meta http-equiv='refresh' content='0,index.php' />";
			$error="Login Success";
		}
		else{
			$error="Error : username and password is wrong";
		}
	}

	?>
	  <section class="vh-100">
		  <div class="container py-5 h-100">
		<!-- <div class="card"> -->
      <div class="row d-flex align-items-center justify-content-center h-100">
        <div class="col-md-8 col-lg-7 col-xl-6">
		<img src="../assets/image/draw2.svg" class="img-fluid" alt="Phone image">
        </div>
        <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1">
								<!--<div style="text-align:center; margin: 20px 0; "><img src="./assets/img/logo.png" width="250px" /></div>-->

								<?php if(isset($error)) {echo "<div id='error'><strong><strong>$error</div>";} ?>

									<div id="login">
										<form action="" method="POST" encryption="">
										 <!-- Email input -->
										 <div class="form-outline mb-4">
              <label class="form-label" for="form1Example13">Username</label>
              <input type="text" id="form1Example13" name="username" value="" autofocus="autofocus" class="form-control form-control-lg" />
            </div>
  
            <!-- Password input -->
            <div class="form-outline mb-4">
              <label class="form-label" for="form1Example23">Password</label>
              <input type="password" id="form1Example23" name="password" class="form-control form-control-lg" />
            </div>
  
  
            <!-- Submit button -->
            <button type="submit" class="btn btn-dark btn-lg btn-block">Sign in</button>
										</form>
										</div>
      </div>
    </div>
    </div>
    <!-- </div> -->
  </section>
		</div>
		<script src="./assets/js/jquery.js"></script>
		<script src="./assets/js/bootstrap.min.js"></script>
		<script src="./assets/js/script.js"></script>
		<script src="./assets/js/validation.js"></script>
	</body>
	</html>