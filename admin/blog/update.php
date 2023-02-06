<!DOCTYPE html>
<html>

<head>
    <title>Crypto Blog</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <?php
include(__DIR__ . './../includes/header.php');
?>

    <?php
      

        if (isset($_POST['submit'])) {
            $id = $_POST['id'];
            $category_id = $_POST['category_id'];
            $title = $_POST['title'];
            $description = $_POST['description'];
            $files = $_FILES['image'];

            // jpg,png forment
            // for image
            $filename = $files['name'];
            $filetmp = $files['tmp_name'];

            $fileext = explode('.', $filename);
            $filecheck = strtolower(end($fileext));
            $fileextstored = array('png', 'jpg', 'jpeg',);

            if (in_array($filecheck, $fileextstored)) {
                $destinationfile = '../assets/image/' . $filename;
                move_uploaded_file($filetmp, $destinationfile);
            }

            $sql = mysqli_query($conn, "UPDATE `blog` SET `title`='$title',
            `description`='$description',`category_id`='$category_id' WHERE `id`='$id'");
            if ($destinationfile != '') {

                $sql = mysqli_query($conn, "UPDATE `blog` SET `image`='$destinationfile',`title`='$title',
                                                `description`='$description',`category_id`='$category_id' WHERE `id`='$id'");
            } else {

                echo "image Upload";
            }
            if (!$sql) {
                echo mysqli_error($conn);
            } else {
                header ("Location:" . BASE_URL . "/blogcategory/index.php");
                echo "Updated Successfully!";
            }
        } else { ?>

    <?php
         include(__DIR__ . './../database.php');
            $id = $_GET['id'];
            $sql = "SELECT * from blog WHERE id='$id'";
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
                                    <h5 class="card-title">Edit blog</h5>
                                    <div class=" float-end">
                                        <!-- <button name="submit" type="submit" value="submit" class="btn btn-primary">Submit</botton></br> -->
                                    </div>
                                </div>
                                <div class="card-body pt-0">
                                    <form name="blog" id="blog" class="validate-form1 needs-validation" action=""
                                        method="POST" enctype="multipart/form-data" novalidate>

                                        <!--Start Form Field  -->
                                        <!-- <input type="text" id="id" name="id" placeholder="id..." value="<?php echo $row['id']; ?>" readonly> -->

                                        <div class="input-form my-2">
                                            <label class="form-label" for="title">title<span
                                                    class="text-danger">*</span></label>
                                            <input type="text" id="title" name="title" class="form-control "
                                                value="<?php echo $row['title']; ?>" placeholder="Enter Your Name"
                                                autofocus required />
                                        </div>
                                        <div class="input-form my-2">
                                            <label class="form-label" for="category_id">category_id<span
                                                    class="text-danger">*</span></label>
                                            <input type="text" id="category_id" name="category_id" class="form-control "
                                                value="<?php echo $row['category_id']; ?>" placeholder="Enter Your Name"
                                                autofocus required />
                                        </div>
                                        <div class="input-form my-2">
                                            <label class="form-label" for="image">Image<span
                                                    class="text-danger">*</span></label>
                                            <input type="file" id="image" name="image" class="form-control "
                                                value="<?php echo $row['image']; ?>" placeholder="Enter Your image"
                                                autofocus required />
                                        </div>
                                        <div class="input-form my-2">
                                            <label class="form-label" for="description">Description<span
                                                    class="text-danger">*</span></label>
                                            <input type="text" id="description" name="description" class="form-control "
                                                value="<?php echo $row['description']; ?>"
                                                placeholder="Enter Your Description" autofocus required />
                                        </div>

                                        <!-- <div class='input-form my-2'>
                                            <label class='form-label' for='fp-default'>Status(dactive/active)</label>
                                            <div class='form-check form-switch form-check-primary'>
                                                <input type='checkbox' id='status' value='1' name='status'
                                                    class='form-check-input' checked>
                                                <label class='form-check-label' for='status'></label>
                                            </div>
                                        </div> -->
                                        <!--End Form Field  -->
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
                        <div class="col-sm-4">
                            <img src="<?php echo $row["image"]; ?>" class="w-100 box">
                        </div>
                        <?php } ?>
                        <!-- /Bootstrap Validation -->
                    </div>
                </section>
            </div>
        </div>
    </div>
    <?php } ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>
</body>

</html>