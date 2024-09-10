<?php
// Include the header and establish database connection
include(__DIR__ . '/../includes/header.php');

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];

    // Insert the data into the database
    $sql = mysqli_query($conn, "INSERT INTO `contactus`(`name`,`phone`,`email`) VALUES ('$name','$phone','$email')");

    if (!$sql) {
        echo mysqli_error($conn);
    } else {
        header("location:" . BASE_URL . "/index.php");
        echo "Records added successfully.";
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
                                <h5 class="card-title">Create Contact Us</h5>
                            </div>
                            <div class="card-body pt-0">
                                <form name="contactus" id="contactus" class="validate-form1 needs-validation" action="" method="POST" enctype="multipart/form-data" novalidate>
                                    <!-- Start Form Field -->
                                    <div class="input-form my-2">
                                        <label class="form-label" for="name">Name<span class="text-danger">*</span></label>
                                        <input type="text" id="name" name="name" class="form-control" value="" placeholder="Enter Your name" autofocus required />
                                    </div>

                                    <div class="input-form my-2">
                                        <label class="form-label" for="phone">Phone<span class="text-danger">*</span></label>
                                        <input type="number" id="phone" name="phone" class="form-control" value="" placeholder="Enter Your phone" autofocus required />
                                    </div>

                                    <div class="input-form my-2">
                                        <label class="form-label" for="email">Email<span class="text-danger">*</span></label>
                                        <input type="email" id="email" name="email" class="form-control" value="" placeholder="Enter Your email" autofocus required />
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
                    <!-- /Bootstrap Validation -->
                </div>
            </section>
        </div>
    </div>
</div>

<?php include(__DIR__ . '/../includes/footer.php'); ?>
