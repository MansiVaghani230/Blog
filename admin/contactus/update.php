<!DOCTYPE html>
<html>
<head>
<title>Crypto ContactUs</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<?php
include(__DIR__ . './../includes/header.php');
?>
<?php
  
        if (isset($_POST['submit'])) {
            $id = $_POST['id'];
            $name = $_POST['name'];
            $phone = $_POST['phone'];
            $email = $_POST['email'];
            // $sql = mysqli_query($conn, "UPDATE `contactus` SET `name`,`phone`,`email`='$name','$phone','$email' WHERE `id`='$id'");
            $sql = mysqli_query($conn, "UPDATE `contactus` SET `name`='$name',
            `phone`='$phone',`email`='$email' WHERE `id`='$id'");
            if (!$sql) {
                echo mysqli_error($conn);
            } else {
                echo "Updated Successfully!";
                include('./index.php');
            }
        } else { ?><?php
            include(__DIR__ . './../database.php');
            $id = $_GET['id'];
            $sql = "SELECT * from contactus WHERE id='$id'";
            $query = mysqli_query($conn, $sql);

            ?>
    </style>
</head>
<body>
    <?php
            while ($row = mysqli_fetch_assoc($query)) {
    ?>

<div class="app-content content ">
    <div class="content-wrapper container-xxl p-0 pt-5">
        <div class="content-body">
            <section class="bs-validation">
                <div class="row">
                    <!-- Bootstrap Validation -->
                    <div class="col-md-8 col-12">
                        <div class="card">
                            <div class="card-header pb-0">
                                <h4 class="card-title">Update Contact Us</h4>
                            </div>
                            <div class="card-body pt-0">
                                <form name="contactus" id="contactus" class="validate-form1 needs-validation"
                                    action="" method="POST"
                                    enctype="multipart/form-data" novalidate>

                                     <!--Start Form Field  -->
                                     <!-- <input type="text" id="id" name="id" placeholder="id..." value="<?php echo $row['id']; ?>" readonly> -->

                                    <div class="input-form my-2">
                                            <label class="form-label" for="name">Name<span  class="text-danger">*</span></label>
                                            <input type="text" id="name" name="name" class="form-control " value="<?php echo $row['name']; ?>" placeholder="Enter Your Name" autofocus required /> 
                                    </div>  

                                    <div class="input-form my-2">
                                            <label class="form-label" for="phone">Phone<span  class="text-danger">*</span></label>
                                            <input type="text" id="phone" name="phone" class="form-control " value="<?php echo $row['phone']; ?>" placeholder="Enter Your phone" autofocus required /> 
                                    </div> 
                                    
                                    <div class="input-form my-2">
                                            <label class="form-label" for="email">email<span  class="text-danger">*</span></label>
                                            <input type="text" id="email" name="email" class="form-control " value="<?php echo $row['email']; ?>" placeholder="Enter Your email" autofocus required /> 
                                    </div> 
                                   
                                     <hr>
                                     <div class="input-form my-1">
                                            <button type="submit" name="submit" value="submit"
                                                class="btn btn-success"><b>Save</b></button>
                                            <button type="reset" name="reset" value="reset"
                                                class="btn btn-secondary"><b>Reset</b></button>
                                            <a href="./index.php" class="btn btn-dark float-end"><b>Back</b></a>
                                        </div>
                                    <?php } ?>      
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- /Bootstrap Validation -->
                </div>
            </section>
        </div>
    </div>
</div>
<?php } ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>


