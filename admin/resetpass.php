
<?php
include(__DIR__ . './includes/header.php');
?>
<!-- <div class="container"> -->
<div class="app-content content">
        <div class="content-wrapper container-xxl p-0 pt-5">
            <div class="content-body">
                <section class="bs-validation">
                    <div class="row">
                        <!-- Bootstrap Validation -->
                        <div class="col-md-8 col-12">
                            <div class="card">
                                <div class="card-header pb-0">
                                    <h5 class="card-title">Reset Password</h5>
                                    <div class=" float-end">
                                        <!-- <button name="submit" type="submit" value="submit" class="btn btn-primary">Submit</botton></br> -->
                                    </div>
                                </div>
                                <div class="card-body pt-0">
                                    <form name="blog" id="blog" class="validate-form1 needs-validation" action=""
                                        method="POST" enctype="multipart/form-data" novalidate>
                                        <div class="mb-3 mt-3">
                                                <label for="exampleInputPassword1">Old Password</label>
                                                <input type="oldpassword" name="oldpassword" class="form-control" id="exampleInputPassword1" placeholder="oldpassword">
                                                <!-- <div id="emailHelp" class="form-text">We'll never share your oldpassword with anyone else.</div> -->
                                            </div>
                                        
                                            <div class="mb-3">
                                                <label for="exampleInputPassword1">New Password</label>
                                                <input type="newpassword" name="new password" class="form-control" id="exampleInputPassword1" placeholder="newpassword">
                                                <!-- <div id="emailHelp" class="form-text">We'll never share your newpassword with anyone else.</div> -->
                                            </div>

                                            <div class="mb-3">
                                                <label for="exampleInputPassword1">Confirm Password</label>
                                                <input type="confirmpassword" name="confirmpassword" class="form-control" id="exampleInputPassword1" placeholder="confirm password">
                                                <!-- <div id="emailHelp" class="form-text">We'll never share your confirmpassword with anyone else.</div> -->
                                            </div>

                                            <button type="submit" class="btn btn-dark">Submit</button>

                                            </form>
                                        </div>
                                    <!-- </form> -->
                                </div>
                            </div>
                        </div>
                        <!-- /Bootstrap Validation -->
                    </div>
                </section>
            </div>
        </div>
<?php
include(__DIR__ . './includes/footer.php');
 ?>
