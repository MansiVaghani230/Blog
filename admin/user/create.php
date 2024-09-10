<?php
include(__DIR__ . '/../includes/header.php'); // Corrected path

$errors = array(); // Initialize the errors array

if (isset($_POST['submit'])) {

    $fname = filter_input(INPUT_POST, 'fname', FILTER_SANITIZE_STRING);
    $lname = filter_input(INPUT_POST, 'lname', FILTER_SANITIZE_STRING);
    $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);
    $status = filter_input(INPUT_POST, 'status', FILTER_SANITIZE_STRING);

    if (empty($fname)) {
        $errors['fname'] = "First Name should not be empty";
    }
    if (empty($lname)) {
        $errors['lname'] = "Last Name should not be empty";
    }
    if (empty($username)) {
        $errors['username'] = "Username should not be empty";
    }
    if (empty($email)) {
        $errors['email'] = "Email should not be empty";
    }
    if (empty($password)) {
        $errors['password'] = "Password should not be empty";
    }
    if (empty($status)) {
        $errors['status'] = "Status should not be empty";
    }

    if (empty($errors)) { // Proceed only if there are no errors
        $hashed_password = password_hash($password, PASSWORD_BCRYPT);
        $stmt = $conn->prepare("INSERT INTO `user` (`member_fname`, `member_lname`, `member_name`, `member_email`, `member_pass`, `member_status`) VALUES (?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("ssssss", $fname, $lname, $username, $email, $hashed_password, $status);

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
                                <h5 class="card-title">Create User</h5>
                            </div>
                            <div class="card-body pt-0">
                                <form name="crud-form" id="crud-form" action="" method="POST" novalidate>
                                    <!-- First Name Field -->
                                    <div class="input-form my-2 <?php if(isset($errors['fname'])) { echo 'has-error'; } ?>">
                                        <label class="form-label" for="fname">First Name<span class="text-danger">*</span></label>
                                        <input type="text" id="fname" name="fname" class="form-control" value="<?php echo htmlspecialchars($fname ?? ''); ?>" placeholder="Enter First Name" autofocus required />
                                        <p class="text-danger"><?php if(isset($errors['fname'])) { echo $errors['fname']; } ?></p>
                                    </div>

                                    <!-- Last Name Field -->
                                    <div class="input-form my-2 <?php if(isset($errors['lname'])) { echo 'has-error'; } ?>">
                                        <label class="form-label" for="lname">Last Name<span class="text-danger">*</span></label>
                                        <input type="text" id="lname" name="lname" class="form-control" value="<?php echo htmlspecialchars($lname ?? ''); ?>" placeholder="Enter Last Name" required />
                                        <p class="text-danger"><?php if(isset($errors['lname'])) { echo $errors['lname']; } ?></p>
                                    </div>

                                    <!-- Username Field -->
                                    <div class="input-form my-2 <?php if(isset($errors['username'])) { echo 'has-error'; } ?>">
                                        <label class="form-label" for="username">Username<span class="text-danger">*</span></label>
                                        <input type="text" id="username" name="username" class="form-control" value="<?php echo htmlspecialchars($username ?? ''); ?>" placeholder="Enter Username" required />
                                        <p class="text-danger"><?php if(isset($errors['username'])) { echo $errors['username']; } ?></p>
                                    </div>

                                    <!-- Email Field -->
                                    <div class="input-form my-2 <?php if(isset($errors['email'])) { echo 'has-error'; } ?>">
                                        <label class="form-label" for="email">Email<span class="text-danger">*</span></label>
                                        <input type="email" id="email" name="email" class="form-control" value="<?php echo htmlspecialchars($email ?? ''); ?>" placeholder="Enter Email" required />
                                        <p class="text-danger"><?php if(isset($errors['email'])) { echo $errors['email']; } ?></p>
                                    </div>

                                    <!-- Password Field -->
                                    <div class="input-form my-2 <?php if(isset($errors['password'])) { echo 'has-error'; } ?>">
                                        <label class="form-label" for="password">Password<span class="text-danger">*</span></label>
                                        <input type="password" id="password" name="password" class="form-control" placeholder="Enter Password" required />
                                        <p class="text-danger"><?php if(isset($errors['password'])) { echo $errors['password']; } ?></p>
                                    </div>

                                    <!-- Status Field -->
                                    <div class="input-form my-2 <?php if(isset($errors['status'])) { echo 'has-error'; } ?>">
                                        <label class="form-label" for="status">Status<span class="text-danger">*</span></label>
                                        <select id="status" name="status" class="form-control" required>
                                            <option value="" disabled selected>Select Status</option>
                                            <option value="a" <?php if(isset($status) && $status == 'a') echo 'selected'; ?>>Active</option>
                                            <option value="d" <?php if(isset($status) && $status == 'd') echo 'selected'; ?>>Deactivated</option>
                                        </select>
                                        <p class="text-danger"><?php if(isset($errors['status'])) { echo $errors['status']; } ?></p>
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
