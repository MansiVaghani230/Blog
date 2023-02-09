<?php
include('./header.php');
?>
<div class="container">
    <div class="row">
        <div class="col-sm-8 offset-sm-2 my-5">
        <h2 class="mb-3">Reset password</h2>
            <form action="./mail.php" method="POST" autocomplete="off">

            <div class="mb-3">
                <label for="exampleInputPassword1">Old Password</label>
                 <input type="oldpassword" name="oldpassword" class="form-control" id="exampleInputPassword1" placeholder="oldpassword">
                <!-- <div id="emailHelp" class="form-text">We'll never share your oldpassword with anyone else.</div> -->
            </div>
           
            <div class="mb-3">
                <label for="exampleInputPassword1">New Password</label>
                 <input type="newpassword" name="newpassword" class="form-control" id="exampleInputPassword1" placeholder="newpassword">
                <!-- <div id="emailHelp" class="form-text">We'll never share your newpassword with anyone else.</div> -->
            </div>

            <div class="mb-3">
                <label for="exampleInputPassword1">Confirm Password</label>
                 <input type="confirmpassword" name="confirmpassword" class="form-control" id="exampleInputPassword1" placeholder="confirmpassword">
                <!-- <div id="emailHelp" class="form-text">We'll never share your confirmpassword with anyone else.</div> -->
            </div>

            <button type="submit" class="btn btn-dark">Submit</button>
            </form>
        </div>
    </div>
</div>


<?php include('./footer.php'); ?>