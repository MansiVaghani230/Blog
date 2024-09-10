<?php
include(__DIR__ . '/../includes/header.php'); // Include the header file
include(__DIR__ . '/../database.php'); // Include the database connection file

if (isset($_POST['submit'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];

    // Update the record
    $sql = mysqli_query($conn, "UPDATE `contactus` SET `name`='$name', `phone`='$phone', `email`='$email' WHERE `id`='$id'");

    if (!$sql) {
        echo mysqli_error($conn);
    } else {
        header("Location: " . BASE_URL . "/contactus/index.php");
        echo "Updated Successfully!";
    }
} else {
    $id = $_GET['id'];
    $sql = "SELECT * FROM `contactus` WHERE `id`='$id'";
    $query = mysqli_query($conn, $sql);

    while ($row = mysqli_fetch_assoc($query)) {
        ?>

        <div class="app-content content">
            <div class="content-wrapper container-xxl p-0 pt-5">
                <div class="content-body">
                    <section class="bs-validation">
                        <div class="row">
                            <div class="col-md-8 col-12">
                                <div class="card">
                                    <div class="card-header pb-0">
                                        <h4 class="card-title">Update Contact Us</h4>
                                    </div>
                                    <div class="card-body pt-0">
                                        <form name="contactus" id="contactus" class="validate-form1 needs-validation"
                                              action="" method="POST"
                                              enctype="multipart/form-data" novalidate>

                                            <input type="hidden" id="id" name="id" value="<?php echo $row['id']; ?>" />

                                            <div class="input-form my-2">
                                                <label class="form-label" for="name">Name<span class="text-danger">*</span></label>
                                                <input type="text" id="name" name="name" class="form-control" value="<?php echo $row['name']; ?>" placeholder="Enter Your Name" autofocus required />
                                            </div>

                                            <div class="input-form my-2">
                                                <label class="form-label" for="phone">Phone<span class="text-danger">*</span></label>
                                                <input type="text" id="phone" name="phone" class="form-control" value="<?php echo $row['phone']; ?>" placeholder="Enter Your phone" autofocus required />
                                            </div>

                                            <div class="input-form my-2">
                                                <label class="form-label" for="email">Email<span class="text-danger">*</span></label>
                                                <input type="text" id="email" name="email" class="form-control" value="<?php echo $row['email']; ?>" placeholder="Enter Your email" autofocus required />
                                            </div>

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
                        </div>
                    </section>
                </div>
            </div>
        </div>

        <?php
    }
}
?>

<?php include(__DIR__ . '/../includes/footer.php'); ?>
