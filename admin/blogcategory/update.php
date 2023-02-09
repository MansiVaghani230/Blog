<!DOCTYPE html>
<html>
<head>
<title>Crypto blogcategory</title>
<?php
include(__DIR__ . './../includes/header.php');
?>
<?php
  
        if (isset($_POST['submit'])) {
            $id = $_POST['id'];
            $category_name = $_POST['category_name'];
            $show_in_nav = $_POST['show_in_nav'];
            $sql = mysqli_query($conn, "UPDATE `blogcategory` SET `category_name`='$category_name', `show_in_nav` = '$show_in_nav' WHERE `id`='$id'");
            if (!$sql) {
                echo mysqli_error($conn);
            } else {
                header ("Location:/index.php");
                echo "<meta http-equiv='refresh' content='0,index.php' />";
            }
        } else { ?><?php
            include(__DIR__ . './../database.php');
            $id = $_GET['id'];
            $sql = "SELECT * from blogcategory WHERE id='$id'";
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
                                <h4 class="card-title">Update blog Category</h4>
                                <div class=" float-end">
                                <!-- <button name="submit" type="submit" value="submit" class="btn btn-primary">Submit</botton></br> -->
                                </div>
                            </div>
                            <div class="card-body pt-0">
                                <form name="blogcategory" id="blogcategory" class="validate-form1 needs-validation"
                                    action="" method="POST"
                                    enctype="multipart/form-data" novalidate>
                                    <input type="hidden" id="id" name="id" class="form-control "
                                                value="<?php echo $row['id']; ?>" />

                                     <!--Start Form Field  -->
                                     <!-- <input type="text" id="id" name="id" placeholder="id..." value="<?php echo $row['id']; ?>" readonly> -->

                                    <div class="input-form my-2">
                                            <label class="form-label" for="category_name">Category Name<span  class="text-danger">*</span></label>
                                            <input type="text" id="category_name" name="category_name" class="form-control " value="<?php echo $row['category_name']; ?>" placeholder="Enter Your Name" autofocus required /> 
                                    </div>  
                                    <div class="input-form my-2">
                                            <label class="form-label" for="show_in_nav">Show Navigation<span
                                                    class="text-danger">*</span></label>
                                                    <div>
                                            <input type="radio" id="show_in_nav" value="<?php if ($row["show_in_nav"]=='yes'){echo "selected";}?>" name="show_in_nav"/> Yes
                                            <input type="radio" id="show_in_nav" value="<?php if ($row["show_in_nav"]=='no'){echo "selected";}?>" name="show_in_nav"/> No
                                    </div>
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
</body>
</html>


