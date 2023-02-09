<?php
include('./header.php');
?>
<div class="container">
    <div class="row">
        <div class="col-sm-8 offset-sm-2 my-5">
        <h2>Contact Us</h2>
            <form action="./mail.php" method="POST" autocomplete="off">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Your Name</label>
                <input type="text" name="name" placeholder="Your Name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                <!-- <div id="textHelp" class="form-text">We'll never share your email with anyone else.</div> -->
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" name="email"  placeholder="Your Email Address" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Your Subject</label>
                <input type="text" name="subject" placeholder="Your Subject" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                <!-- <div id="textHelp" class="form-text">We'll never share your email with anyone else.</div> -->
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Message</label>
                <textarea class="form-control" name="message" placeholder="Your Message" id="exampleInputEmail1" aria-describedby="messageHelp" rows="5"></textarea>
                <!-- <div id="messageHelp" class="form-text">We'll never share your email with anyone else.</div> -->
            </div>
            <button type="submit" class="btn btn-dark">Submit</button>
            </form>
        </div>
    </div>
</div>


<?php include('./footer.php'); ?>