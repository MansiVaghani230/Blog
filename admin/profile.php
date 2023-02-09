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
                                    <h5 class="card-title">Profile Page</h5>
                                    <div class=" float-end">
                                        <!-- <button name="submit" type="submit" value="submit" class="btn btn-primary">Submit</botton></br> -->
                                    </div>
                                </div>
                                <div class="card-body pt-0">
                                    <form name="blog" id="blog" class="validate-form1 needs-validation" action=""
                                        method="POST" enctype="multipart/form-data" novalidate>
                                        <!--Start Form Field  -->
                                                <div class="mb-3 mt-3">
                                                    <label for="exampleInputEmail1" class="form-label">Frist Name</label>
                                                    <input type="text" name="fristname" placeholder="Your Name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                                    <!-- <div id="textHelp" class="form-text">We'll never share your email with anyone else.</div> -->
                                                </div>

                                                <div class="mb-3">
                                                    <label for="exampleInputEmail1" class="form-label">Last Name</label>
                                                    <input type="text" name="lastname" placeholder="Your Name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                                    <!-- <div id="textHelp" class="form-text">We'll never share your email with anyone else.</div> -->
                                                </div>

                                                <div class="mb-3">
                                                    <label for="exampleInputEmail1" class="form-label">User Name</label>
                                                    <input type="text" name="Username" placeholder="Your Name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                                    <!-- <div id="textHelp" class="form-text">We'll never share your email with anyone else.</div> -->
                                                </div>

                                                <div class="mb-3">
                                                    <label for="exampleInputEmail1" class="form-label">Mobile</label>
                                                    <input type="number" name="mobile" placeholder="Your Mobile" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                                    <!-- <div id="textHelp" class="form-text">We'll never share your email with anyone else.</div> -->
                                                </div>

                                                <div class="mb-3">
                                                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                                                    <input type="email" name="email"  placeholder="Your Email Address" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                                    <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
                                                </div>
                                            
                                                <div class="mb-3">
                                                    <label for="exampleInputPassword1">Password</label>
                                                    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="new password">
                                                    <!-- <div id="emailHelp" class="form-text">We'll never share your newpassword with anyone else.</div> -->
                                                </div>

                                                <div class="mb-3">
                                                    <label for="exampleInputPassword1">Confirm Password</label>
                                                    <input type="confirmpassword" name="confirmpassword" class="form-control" id="exampleInputPassword1" placeholder="confirm password">
                                                    <!-- <div id="emailHelp" class="form-text">We'll never share your confirmpassword with anyone else.</div> -->
                                                </div>

                                                <div class="mb-3">
                                                    <label for="exampleInputPassword1">Image</label>
                                                    <input type="file" name="image" class="form-control" id="exampleInputPassword1" placeholder="confirm password">
                                                    <!-- <div id="emailHelp" class="form-text">We'll never share your image with anyone else.</div> -->
                                                </div>

                                                <button type="submit" class="btn btn-dark">Submit</button>
                                                </form>
                                            </div>
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