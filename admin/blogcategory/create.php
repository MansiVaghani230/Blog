<!DOCTYPE html>
<html>
<head>
<title>Crypto blogcategory</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<?php
include(__DIR__ . './../includes/header.php');
?>
<?php
   
        if (isset($_POST['submit'])) {

            $category_name = $_POST['category_name'];

            $sql = mysqli_query($conn, "INSERT INTO `blogcategory`(`category_name`) VALUES ('$category_name')");

            if (!$sql) {
                echo mysqli_error($conn);
            } else {
                echo "Records added successfully.";
                header("location:./index.php");
            }
        }
        ?>
</head>
<body>
<div class="app-content content ">
    <div class="content-wrapper container-xxl p-0 pt-3">
        <div class="content-body">
            <section class="bs-validation">
                <div class="row">
                    <!-- Bootstrap Validation -->
                    <div class="col-md-8 col-12">
                        <div class="card">
                            <div class="card-header pb-0">
                                <h4 class="card-title">Create blogcategory</h4>
                                <div class=" float-end">
                                <!-- <button name="submit" type="submit" value="submit" class="btn btn-primary">Submit</botton></br> -->
                                </div>
                            </div>
                            <div class="card-body pt-0">
                                <form name="blogcategory" id="blogcategory" class="validate-form1 needs-validation"
                                    action="" method="POST"
                                    enctype="multipart/form-data" novalidate>
                                     <!--Start Form Field  -->
                                    <div class="input-form mb-1">
                                            <label class="form-label" for="category_name">category_name<span  class="text-danger">*</span></label>
                                            <input type="text" id="category_name" name="category_name" class="form-control " value="" placeholder="Enter Your category_name" autofocus required /> 
                                    </div>  
                                    <div class="input-form mb-1">
                                     <hr>
                                    <div class="input-form mt-1">
                                    <button name="submit" type="submit" value="submit" class="btn btn-primary">Submit</botton></br>
                                    </div>        
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
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>


