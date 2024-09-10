<?php
include(__DIR__ . '/../includes/header.php'); // Corrected path for the header file

$errors = array(); // Initialize the errors array

if (isset($_POST['submit'])) {

    if ($_POST['title'] == null) {
        $errors['title'] = "Title should not be empty";
    }
    if ($_POST['category_id'] == null) {
        $errors['category_id'] = "Category should not be empty";
    }
    if ($_FILES['image']['name'] == null) {
        $errors['image'] = "Image should not be empty";
    } else {
        $files = $_FILES['image'];
        $title = filter($_POST['title']);
        $category_id = filter($_POST['category_id']);
        $description = filter($_POST['description']);

        // Validate and process the image
        $filename = $files['name'];
        $filetmp = $files['tmp_name'];
        $fileext = explode('.', $filename);
        $filecheck = strtolower(end($fileext));
        $fileextstored = array('png', 'jpg', 'jpeg');

        if (in_array($filecheck, $fileextstored)) {
            $destinationfile = '../assets/image/' . $filename;
            move_uploaded_file($filetmp, $destinationfile);
        } else {
            $errors['image'] = "Invalid image format. Allowed formats: png, jpg, jpeg.";
        }

        if (empty($errors)) { // Proceed only if there are no errors
            $sql = mysqli_query($conn, "INSERT INTO `blog`(`title`, `image`, `description`, `category_id`) VALUES ('$title', '$destinationfile','$description','$category_id')");

            if (!$sql) {
                echo mysqli_error($conn);
            } else {
                header("Location: ./index.php");
                exit;
            }
        }
    }
}
?>

<div class="app-content content">
    <div class="content-wrapper container-xxl p-0 pt-5">
        <div class="content-body">
            <section class="bs-validation">
                <div class="row">
                    <!-- Bootstrap Validation -->
                    <div class="col-md-8 col-12">
                        <div class="card">
                            <div class="card-header pb-0">
                                <h5 class="card-title">Create blog</h5>
                            </div>
                            <div class="card-body pt-0">
                                <form name="blog" id="blog" class="validate-form1 needs-validation" action=""
                                    method="POST" enctype="multipart/form-data" novalidate>
                                    <!--Start Form Field  -->
                                    <div class="input-form my-2 <?php if (isset($errors['title'])) { echo 'has-error'; } ?>">
                                        <label class="form-label" for="title">Title<span class="text-danger">*</span></label>
                                        <input type="text" id="title" name="title" class="form-control" value=""
                                            placeholder="Enter Your title" autofocus required />
                                        <p class="text-danger"><?php if (isset($errors['title'])) { echo $errors['title']; } ?></p>
                                    </div>

                                    <div class="input-form my-2 <?php if (isset($errors['category_id'])) { echo 'has-error'; } ?>">
                                        <label class="form-label" for="category_id">Blog Category<span class="text-danger">*</span></label>
                                        <select name="category_id" id="category_id" class="form-select form-control" required>
                                            <option value="">Select Category</option>
                                            <?php
                                            $records = mysqli_query($conn, "SELECT category_name, id FROM blogcategory");
                                            while ($data = mysqli_fetch_array($records)) {
                                                echo "<option value='" . $data['id'] . "'>" . $data['category_name'] . "</option>";
                                            }
                                            ?>
                                        </select>
                                        <p class="text-danger"><?php if (isset($errors['category_id'])) { echo $errors['category_id']; } ?></p>
                                    </div>

                                    <div class="input-form my-2 <?php if (isset($errors['image'])) { echo 'has-error'; } ?>">
                                        <label class="form-label" for="image">Image<span class="text-danger">*</span></label>
                                        <input type="file" id="image" name="image" class="form-control" required />
                                        <p class="text-danger"><?php if (isset($errors['image'])) { echo $errors['image']; } ?></p>
                                    </div>

                                    <div class="input-form my-2">
                                        <label class="form-label" for="description">Description<span class="text-danger">*</span></label>
                                        <textarea id="editor" name="description"></textarea>
                                    </div>
                                    <!--End Form Field  -->
                                    <hr>
                                    <div class="input-form my-1">
                                        <button type="submit" name="submit" value="submit" class="btn btn-success"><b>Save</b></button>
                                        <button type="reset" name="reset" value="reset" class="btn btn-secondary"><b>Reset</b></button>
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
        .create(document.querySelector('#editor'))
        .catch(error => {
            console.error(error);
        });
</script>

<?php include(__DIR__ . '/../includes/footer.php'); ?> <!-- Corrected path for the footer file -->
