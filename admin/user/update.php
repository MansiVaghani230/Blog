<?php
include(__DIR__ . '/../includes/header.php');

if (isset($_POST['submit'])) {
    $errors = array();
    
    $id = $_POST['id'];
    $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
    $slug = filter_input(INPUT_POST, 'slug', FILTER_SANITIZE_STRING);

    if (empty($name)) {
        $errors['name'] = "Name should not be empty";
    }
    if (empty($slug)) {
        $errors['slug'] = "Slug should not be empty";
    }

    if (empty($errors)) {
        // Update query for the `tags` table
        $stmt = $conn->prepare("UPDATE `tags` SET `name` = ?, `slug` = ? WHERE `id` = ?");
        $stmt->bind_param("ssi", $name, $slug, $id);

        if ($stmt->execute()) {
            header("Location: ./index.php?success=1");
            exit;
        } else {
            echo "Error: " . $stmt->error;
        }
    }
}

// Fetch existing data for the given ID
$id = $_GET['id'];
$query = $conn->prepare("SELECT `name`, `slug` FROM `tags` WHERE `id` = ?");
$query->bind_param("i", $id);
$query->execute();
$result = $query->get_result();
$row = $result->fetch_assoc();
?>

<div class="app-content content">
    <div class="content-wrapper container-xxl p-0 pt-5">
        <div class="content-body">
            <section class="bs-validation">
                <div class="row">
                    <!-- Edit Form -->
                    <div class="col-md-8 col-12">
                        <div class="card">
                            <div class="card-header pb-0">
                                <h5 class="card-title">Edit Record</h5>
                            </div>
                            <div class="card-body pt-0">
                                <form name="edit-form" id="edit-form" action="" method="POST" novalidate>
                                    <!-- Hidden ID Field -->
                                    <input type="hidden" name="id" value="<?php echo $id; ?>">

                                    <!-- Name Field -->
                                    <div class="input-form my-2 <?php if(isset($errors['name'])) { echo 'has-error'; } ?>">
                                        <label class="form-label" for="name">Name<span class="text-danger">*</span></label>
                                        <input type="text" id="name" name="name" class="form-control" value="<?php echo htmlspecialchars($row['name']); ?>" placeholder="Enter Name" required />
                                        <p class="text-danger"><?php if(isset($errors['name'])) { echo $errors['name']; } ?></p>
                                    </div>

                                    <!-- Slug Field -->
                                    <div class="input-form my-2 <?php if(isset($errors['slug'])) { echo 'has-error'; } ?>">
                                        <label class="form-label" for="slug">Slug<span class="text-danger">*</span></label>
                                        <input type="text" id="slug" name="slug" class="form-control" value="<?php echo htmlspecialchars($row['slug']); ?>" placeholder="Enter Slug" required />
                                        <p class="text-danger"><?php if(isset($errors['slug'])) { echo $errors['slug']; } ?></p>
                                    </div>

                                    <!-- Form Buttons -->
                                    <hr>
                                    <div class="input-form my-1">
                                        <button type="submit" name="submit" value="submit" class="btn btn-success"><b>Save</b></button>
                                        <a href="./index.php" class="btn btn-dark float-end"><b>Back</b></a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- /Edit Form -->
                </div>
            </section>
        </div>
    </div>
</div>

<?php include(__DIR__ . '/../includes/footer.php'); ?>
