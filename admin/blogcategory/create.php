<!DOCTYPE html>
<html>

<head>
    <title>Crypto blog Category</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <?php
    include(__DIR__ . './../includes/header.php');
?>
    <?php
   
        if (isset($_POST['submit'])) {

            $category_name = $_POST['category_name'];
            $show_in_nav = $_POST['show_in_nav'];

            $sql = mysqli_query($conn, "INSERT INTO `blogcategory`(`category_name`,`show_in_nav`) VALUES ('$category_name', '$show_in_nav')");

            if (!$sql) {
                echo mysqli_error($conn);
            } else {
                
            header ("Location:" . BASE_URL . "/blogcategory/index.php");
                // header("location:./index.php");
                echo "Records added successfully.";
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
                                                class="form-control " value="" placeholder="Enter Your Category Name"
                                                autofocus required />
                                        </div>
                                        <div class="input-form my-2">
                                            <label class="form-label" for="show_in_nav">Show Navigation<span
                                                    class="text-danger">*</span></label>
                                                    <div>
                                            <input type="radio" id="show_in_nav" value="y" name="show_in_nav"/> Yes
                                            <input type="radio" id="show_in_nav" value="n" name="show_in_nav"/> No
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>
    <script>
        ClassicEditor
            .create( document.querySelector( '#editor' ) )
            .catch( error => {
                console.error( error );
            } );
    </script>
</body>

</html>