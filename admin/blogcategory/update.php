<?php
include(__DIR__ . '/../includes/header.php');
include(__DIR__ . '/../database.php'); // Ensure this file initializes $conn correctly

$errors = array(); // Initialize the errors array

if (isset($_POST['submit'])) {
    // Form validation
    if (empty($_POST['category_name'])) {
        $errors['category_name'] = "Category Name should not be empty";
    }
    if (empty($_POST['show_in_nav'])) {
        $errors['show_in_nav'] = "Show in nav should not be empty";
    } else {
        $id = $_POST['id'];
        $category_name = mysqli_real_escape_string($conn, $_POST['category_name']);
        $show_in_nav = mysqli_real_escape_string($conn, $_POST['show_in_nav']);

        $sql = "UPDATE `blogcategory` SET `category_name`='$category_name', `show_in_nav`='$show_in_nav' WHERE `id`='$id'";
        if (mysqli_query($conn, $sql)) {
            header("Location: /index.php");
            exit(); // Ensure redirection happens and no further code is executed
        } else {
            echo "Error: " . mysqli_error($conn);
        }
    }
}

// Retrieve data for the form
$id = isset($_GET['id']) ? intval($_GET['id']) : 0; // Sanitize the input
$sql = "SELECT * FROM blogcategory WHERE id='$id'";
$query = mysqli_query($conn, $sql);

?>

<div class="app-content content ">
    <div class="content-wrapper container-xxl p-0 pt-5">
        <div class="content-body">
            <section class="bs-validation">
                <div class="row">
                    <div class="col-md-8 col-12">
                        <div class="card">
                            <div class="card-header pb-0">
                                <h4 class="card-title">Update Blog Category</h4>
                            </div>
                            <div class="card-body pt-0">
                                <form name="blogcategory" id="blogcategory" class="validate-form1 needs-validation"
                                      action="" method="POST" enctype="multipart/form-data" novalidate>
                                    <?php while ($row = mysqli_fetch_assoc($query)) { ?>
                                        <input type="hidden" id="id" name="id" class="form-control"
                                               value="<?php echo htmlspecialchars($row['id']); ?>" />

                                        <div class="input-form my-2 <?php if(isset($errors['category_name'])) { echo 'has-error'; } ?>">
                                            <label class="form-label" for="category_name">Category Name<span class="text-danger">*</span></label>
                                            <input type="text" id="category_name" name="category_name" class="form-control"
                                                   value="<?php echo htmlspecialchars($row['category_name']); ?>"
                                                   placeholder="Enter Your Name" autofocus required />
                                            <p class="text-danger"><?php if(isset($errors['category_name'])) { echo htmlspecialchars($errors['category_name']); } ?></p>
                                        </div>

                                        <div class="input-form my-2 <?php if(isset($errors['show_in_nav'])) { echo 'has-error'; } ?>">
                                            <label class="form-label" for="show_in_nav">Show Navigation<span class="text-danger">*</span></label>
                                            <div>
                                                <input type="radio" id="show_in_nav_yes" value="yes" name="show_in_nav"
                                                       <?php echo ($row['show_in_nav'] === 'yes') ? 'checked' : ''; ?> /> Yes
                                                <input type="radio" id="show_in_nav_no" value="no" name="show_in_nav"
                                                       <?php echo ($row['show_in_nav'] === 'no') ? 'checked' : ''; ?> /> No
                                                <p class="text-danger"><?php if(isset($errors['show_in_nav'])) { echo htmlspecialchars($errors['show_in_nav']); } ?></p>
                                            </div>
                                        </div>

                                        <hr>
                                        <div class="input-form my-1">
                                            <button type="submit" name="submit" value="submit" class="btn btn-success"><b>Save</b></button>
                                            <button type="reset" name="reset" value="reset" class="btn btn-secondary"><b>Reset</b></button>
                                            <a href="./index.php" class="btn btn-dark float-end"><b>Back</b></a>
                                        </div>
                                    <?php } ?>
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
