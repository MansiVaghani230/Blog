<title>Crypto Blog</title>
<?php
include(__DIR__ . '/../includes/header.php');
include(__DIR__ . '/../database.php');
?>

<?php
if (isset($_POST['submit'])) {
    $errors = array();

    if (empty($_POST['title'])) {
        $errors['title'] = "Title should not be empty";
    }
    if (empty($_POST['category_id'])) {
        $errors['category_id'] = "Category should not be empty";
    }
    if (empty($_FILES['image']['name'])) {
        $errors['image'] = "Image should not be empty";
    } else {
        $id = $_POST['id'];
        $title = filter($_POST['title']);
        $category_id = filter($_POST['category_id']);
        $description = filter($_POST['description']);
        $files = $_FILES['image'];

        // jpg, png format for image
        $filename = $files['name'];
        $filetmp = $files['tmp_name'];
        $fileext = explode('.', $filename);
        $filecheck = strtolower(end($fileext));
        $fileextstored = array('png', 'jpg', 'jpeg');

        if (in_array($filecheck, $fileextstored)) {
            $destinationfile = '../assets/image/' . $filename;
            move_uploaded_file($filetmp, $destinationfile);

            $sql = mysqli_query($conn, "UPDATE `blog` SET `title`='$title', `description`='$description', `category_id`='$category_id', `image`='$destinationfile' WHERE `id`='$id'");
        } else {
            echo "Invalid image format";
        }

        if (!$sql) {
            echo mysqli_error($conn);
        } else {
            header("Location: /index.php");
            exit();
        }
    }
}

$id = $_GET['id'];
$sql = "SELECT * FROM blog WHERE id='$id'";
$query = mysqli_query($conn, $sql);
?>

<?php while ($row = mysqli_fetch_assoc($query)) { ?>
<div class="app-content content">
    <div class="content-wrapper container-xxl p-0 pt-5">
        <div class="content-body">
            <section class="bs-validation">
                <div class="row">
                    <!-- Bootstrap Validation -->
                    <div class="col-md-8 col-12">
                        <div class="card">
                            <div class="card-header pb-0">
                                <h5 class="card-title">Edit blog</h5>
                            </div>
                            <div class="card-body pt-0">
                                <form name="blog" id="blog" class="validate-form1 needs-validation" action="" method="POST" enctype="multipart/form-data" novalidate>
                                    <input type="hidden" id="id" name="id" class="form-control" value="<?php echo htmlspecialchars($row['id']); ?>" />

                                    <div class="input-form my-2 <?php if (isset($errors['title'])) { echo 'has-error'; } ?>">
                                        <label class="form-label" for="title">Title<span class="text-danger">*</span></label>
                                        <input type="text" id="title" name="title" class="form-control" value="<?php echo htmlspecialchars($row['title']); ?>" placeholder="Enter Your Name" autofocus required />
                                        <p class="text-danger"><?php if (isset($errors['title'])) { echo htmlspecialchars($errors['title']); } ?></p>
                                    </div>
                                    <div class="input-form my-2 <?php if (isset($errors['category_id'])) { echo 'has-error'; } ?>">
                                        <label class="form-label" for="category_id">Blog Category<span class="text-danger">*</span></label>
                                        <select name="category_id" id="category_id" class="form-select form-control">
                                            <?php
                                            $records = mysqli_query($conn, "SELECT category_name, id FROM blogcategory");
                                            while ($data = mysqli_fetch_array($records)) {
                                                if ($data['id'] == $row['category_id']) {
                                                    echo "<option value='" . $data['id'] . "' selected>" . htmlspecialchars($data['category_name']) . "</option>";
                                                } else {
                                                    echo "<option value='" . $data['id'] . "'>" . htmlspecialchars($data['category_name']) . "</option>";
                                                }
                                            }
                                            ?>
                                        </select>
                                        <p class="text-danger"><?php if (isset($errors['category_id'])) { echo htmlspecialchars($errors['category_id']); } ?></p>
                                    </div>
                                    <div class="input-form my-2 <?php if (isset($errors['image'])) { echo 'has-error'; } ?>">
                                        <label class="form-label" for="image">Image<span class="text-danger">*</span></label>
                                        <input type="file" id="image" name="image" class="form-control" placeholder="Choose an image" autofocus />
                                        <p class="text-danger"><?php if (isset($errors['image'])) { echo htmlspecialchars($errors['image']); } ?></p>
                                    </div>

                                    <div class="input-form my-2">
                                        <label class="form-label" for="description">Description<span class="text-danger">*</span></label>
                                        <textarea id="editor" name="description"><?php echo htmlspecialchars($row['description']); ?></textarea>
                                    </div>

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
                    <div class="col-sm-4">
                        <img src="<?php echo htmlspecialchars($row["image"]); ?>" class="w-100 box">
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>
<?php } ?>

<script>
    ClassicEditor
        .create(document.querySelector('#editor'))
        .catch(error => {
            console.error(error);
        });
</script>

<?php include(__DIR__ . '/../includes/footer.php'); ?>
