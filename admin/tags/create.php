<?php
include(__DIR__ . '/../includes/header.php'); // Corrected path

$errors = array(); // Initialize the errors array

if (isset($_POST['submit'])) {

    $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
    $slug = filter_input(INPUT_POST, 'slug', FILTER_SANITIZE_STRING);

    if (empty($name)) {
        $errors['name'] = "Name should not be empty";
    }
    if (empty($slug)) {
        $errors['slug'] = "Slug should not be empty";
    }

    if (empty($errors)) { // Proceed only if there are no errors
        // Use the correct table name
        $stmt = $conn->prepare("INSERT INTO `tags` (`name`, `slug`) VALUES (?, ?)");
        $stmt->bind_param("ss", $name, $slug);

        if ($stmt->execute()) {
            header("Location: ./index.php?success=1");
            exit;
        } else {
            echo "Error: " . $stmt->error;
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
                                <h5 class="card-title">Create Record</h5>
                            </div>
                            <div class="card-body pt-0">
                                <form name="crud-form" id="crud-form" action="" method="POST" novalidate>
                                    <!-- Name Field -->
                                    <div class="input-form my-2 <?php if(isset($errors['name'])) { echo 'has-error'; } ?>">
                                        <label class="form-label" for="name">Name<span class="text-danger">*</span></label>
                                        <input type="text" id="name" name="name" class="form-control" value="<?php echo htmlspecialchars($name ?? ''); ?>" placeholder="Enter Name" autofocus required />
                                        <p class="text-danger"><?php if(isset($errors['name'])) { echo $errors['name']; } ?></p>
                                    </div>

                                    <!-- Slug Field -->
                                    <div class="input-form my-2 <?php if(isset($errors['slug'])) { echo 'has-error'; } ?>">
                                        <label class="form-label" for="slug">Slug<span class="text-danger">*</span></label>
                                        <input type="text" id="slug" name="slug" class="form-control" value="<?php echo htmlspecialchars($slug ?? ''); ?>" placeholder="Enter Slug" required />
                                        <p class="text-danger"><?php if(isset($errors['slug'])) { echo $errors['slug']; } ?></p>
                                    </div>

                                    <!-- Form Buttons -->
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

<?php include(__DIR__ . './../includes/footer.php'); ?>
