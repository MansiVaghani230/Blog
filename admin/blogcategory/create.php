<!DOCTYPE html>
<html>

<head>
    <title>Crypto blog Category</title>
    <?php
    include(__DIR__ . './../includes/header.php');
?>
    <?php
   
        if (isset($_POST['submit'])) {

            $category_name = filter($_POST['category_name']);
            $show_in_nav = $_POST['show_in_nav'];


            $sql = mysqli_query($conn, "INSERT INTO `blogcategory`(`category_name`,`show_in_nav`) VALUES ('$category_name', '$show_in_nav')");

            if (!$sql) {
                echo mysqli_error($conn);
            } else {
                
            header ("Location:index.php");
            echo "<meta http-equiv='refresh' content='0,index.php' />";
            }
        }
        ?>
</head>

<body>
    <div class="app-content content ">
        <div class="content-wrapper container-xxl p-0 pt-5">
            <div class="content-body">
                <section class="bs-validation">
                    <div class="row">
                        <!-- Bootstrap Validation -->
                        <div class="col-md-8 col-12">
                            <div class="card">
                                <div class="card-header pb-0">
                                    <h5 class="card-title">Create Blog Category</h5>
                                    <div class=" float-end">
                                        <!-- <button name="submit" type="submit" value="submit" class="btn btn-primary">Submit</botton></br> -->
                                    </div>
                                </div>
                                <div class="card-body pt-0">
                                    <form name="blogcategory" id="blogcategory" class="validate-form1 needs-validation"
                                        action="" method="POST" enctype="multipart/form-data" novalidate>
                                        <!--Start Form Field  -->
                                        <div class="input-form my-2">
                                            <label class="form-label" for="category_name">Blog Category<span
                                                    class="text-danger">*</span></label>
                                            <input type="text" id="category_name" name="category_name"
                                                class="form-control " value="<?php echo $_POST['category_name']; ?>" placeholder="Enter Your Category Name"
                                                autofocus required />
                                                
                                        </div>
                                        <div class="input-form my-2">
                                            <label class="form-label" for="show_in_nav">Show Navigation<span
                                                    class="text-danger">*</span></label>
                                                    <div>
                                            <input type="radio" id="show_in_nav" value="yes" name="show_in_nav"/> Yes
                                            <input type="radio" id="show_in_nav" value="no" name="show_in_nav"/> No
                                        </div>
                                        </div>
                                        <div class="input-form my-2">
                                            <hr>
                                            <div class="input-form my-1">
                                            <button type="submit" name="submit" value="submit"
                                                class="btn btn-success"><b>Save</b></button>
                                            <button type="reset" name="reset" value="reset"
                                                class="btn btn-secondary"><b>Reset</b></button>
                                            <a href="./index.php" class="btn btn-dark float-end"><b>Back</b></a>
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
    <script>
        ClassicEditor
            .create( document.querySelector( '#editor' ) )
            .catch( error => {
                console.error( error );
            } );
    </script>
</body>

</html>