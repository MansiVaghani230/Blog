<?php
include('./header.php');

$status = "";

if(isset($_GET['status'])){
    $status = $_GET['status'];
}

$name = "";

if(isset($_GET['name'])){
    $name = $_GET['name'];
}

$email = "";

if(isset($_GET['email'])){
    $email = $_GET['email'];
}

$subject = "";

if(isset($_GET['subject'])){
    $subject = $_GET['subject'];
}

$message = "";

if(isset($_GET['message'])){
    $message = $_GET['message'];
}



?>
<div class="container">
    <div class="row">
        <div class="col-sm-8 offset-sm-2 my-5">
        <?php if($status == 'success'){ ?>
        <div class="alert alert-success" role="alert">
            Thank you, Email Sent Successfully!
        </div>
        <?php } ?>
        <h2>Contact Us</h2>
            <form action="./mail.php" name="contact" id="contact" method="POST" autocomplete="off" class="needs-validation" novalidate>
            <div class="mb-3 <?php if($name != null) {echo 'has-error'; } ?>">
                <label for="exampleInputEmail1" class="form-label">Your Name</label>
                <input type="text" name="name" placeholder="Your Name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                <?php if($name != null){ ?><div id="textHelp" class="form-text text-danger"><?php echo $name; ?></div><?php } ?>
            </div>
            <div class="mb-3 <?php if($email != null) {echo 'has-error'; } ?>">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" name="email"  placeholder="Your Email Address" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                <?php if($email != null){ ?><div id="textHelp" class="form-text text-danger"><?php echo $email; ?></div><?php } ?>
            </div>
            <div class="mb-3 <?php if($subject != null) {echo 'has-error'; } ?>">
                <label for="exampleInputEmail1" class="form-label">Your Subject</label>
                <input type="text" name="subject" placeholder="Your Subject" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                <?php if($subject != null){ ?><div id="textHelp" class="form-text text-danger"><?php echo $subject; ?></div><?php } ?>
            </div>
            <div class="mb-3 <?php if($message != null) {echo 'has-error'; } ?>">
                <label for="exampleInputEmail1" class="form-label">Message</label>
                <textarea class="form-control" name="message" placeholder="Your Message" id="exampleInputEmail1" aria-describedby="messageHelp" rows="5" required></textarea>
                <?php if($message != null){ ?><div id="textHelp" class="form-text text-danger"><?php echo $message; ?></div><?php } ?>
            </div>
            <button type="submit" class="btn btn-dark">Submit</button>
            </form>
        </div>
    </div>
</div>



<?php include('./footer.php'); ?>