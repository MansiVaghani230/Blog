<?php
include(__DIR__ . '/../includes/header.php');
include(__DIR__ . '/../database.php');

$errors = array(); // Initialize the errors array

if (isset($_POST['submit'])) {
    if (empty($_POST['category_name'])) {
        $errors['category_name'] = "Category Name should not be empty";
    }
    if (empty($_POST['show_in_nav'])) {
        $errors['show_in_nav'] = "Show in nav should not be empty";
    } else {
        $category_name = filter($_POST['category_name']);
        $show_in_nav = $_POST['show_in_nav'];

        $sql = mysqli_query($conn, "INSERT INTO `blogcategory`(`category_name`,`show_in_nav`) VALUES ('$category_name', '$show_in_nav')");

        if (!$sql) {
            echo mysqli_error($conn);
        } else {
            header("Location: index.php");
            exit(); // Ensure redirection happens and no further code is executed
        }
    }
}
?>

<div class="app-content content">
    <div class="content-wrapper container-xxl p-0 pt-5">
        <div class="content-body">
            <section class="bs-validation">
                <div class="row">
                    <div class="col-md-8 col-12">
                        <div class="card">
                            <div class="card-header pb-0">
                                <h5 class="card-title">Create Blog Category</h5>
                            </div>
                            <div class="card-body pt-0">
                                <form name="blogcategory" id="blogcategory" class="validate-form1 needs-validation"
                                    action="" method="POST" novalidate>
                                    <!--Start Form Field -->
                                    <div class="input-form my-2 <?php if(isset($errors['category_name'])) { echo 'has-error'; } ?>">
                                        <label class="form-label" for="category_name">Blog Category<span class="text-danger">*</span></label>
                                        <input type="text" id="category_name" name="category_name" class="form-control" value="<?php echo isset($_POST['category_name']) ? htmlspecialchars($_POST['category_name']) : ''; ?>" placeholder="Enter Your Category Name" autofocus required />
                                        <p class="text-danger"><?php echo isset($errors['category_name']) ? htmlspecialchars($errors['category_name']) : ''; ?></p>
                                    </div>
                                    <div class="input-form my-2 <?php if(isset($errors['show_in_nav'])) { echo 'has-error'; } ?>">
                                        <label class="form-label" for="show_in_nav">Show Navigation<span class="text-danger">*</span></label>
                                        <div>
                                            <input type="radio" id="show_in_nav_yes" value="yes" name="show_in_nav" <?php echo isset($_POST['show_in_nav']) && $_POST['show_in_nav'] === 'yes' ? 'checked' : ''; ?> /> Yes
                                            <input type="radio" id="show_in_nav_no" value="no" name="show_in_nav" <?php echo isset($_POST['show_in_nav']) && $_POST['show_in_nav'] === 'no' ? 'checked' : ''; ?> /> No
                                            <p class="text-danger"><?php echo isset($errors['show_in_nav']) ? htmlspecialchars($errors['show_in_nav']) : ''; ?></p>
                                        </div>
                                    </div>
                                    <div class="input-form my-2">
                                        <hr>
                                        <div class="input-form my-1">
                                            <button type="submit" name="submit" value="submit" class="btn btn-success"><b>Save</b></button>
                                            <button type="reset" name="reset" value="reset" class="btn btn-secondary"><b>Reset</b></button>
                                            <a href="./index.php" class="btn btn-dark float-end"><b>Back</b></a>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>

<?php include(__DIR__ . '/../includes/footer.php'); ?>
