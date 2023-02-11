
    <?php
    include(__DIR__ . './../includes/header.php');
?>
    <?php
   
        if (isset($_POST['submit'])) {

            $errors = array();
            if($_POST['category_name'] == null) {
                $errors['category_name'] = "Category Name should not be empty";
            }
            if($_POST['show_in_nav'] == null) {
                $errors['show_in_nav'] = "Show in nav should not be empty";
            }
            else{

            $category_name = filter($_POST['category_name']);
            $show_in_nav = $_POST['show_in_nav'];

            $category_id =  $_POST['category_id'];

            $sql = mysqli_query($conn, "INSERT INTO `blogcategory`(`parent_id`, `category_name`,`show_in_nav`) VALUES ('$category_id', '$category_name', '$show_in_nav')");

            if (!$sql) {
                echo mysqli_error($conn);
            }
                
            header ("Location:index.php");
            echo "<meta http-equiv='refresh' content='0,index.php'/>";
            }
        }
        ?>
    <div class="app-content content ">
        <div class="content-wrapper container-xxl p-0 pt-5">
            <div class="content-body">
                <section class="bs-validation">
                    <div class="row">
                        <!-- Bootstrap Validation -->
                        <div class="col-md-8 col-12">
                            <div class="card">
                                <div class="card-header pb-0">
                                    <h5 class="card-title">Create Blog Category</h5>
                                    <div class=" float-end">
                                        <!-- <button name="submit" type="submit" value="submit" class="btn btn-primary">Submit</botton></br> -->
                                    </div>
                                </div>
                                <div class="card-body pt-0">
                                    <form name="blogcategory" id="blogcategory" class="validate-form1  needs-validation"
                                        action="" method="POST" enctype="multipart/form-data" novalidate>

                                        <div class="input-form my-2">
                                            <label class="form-label" for="category_id">Blog Category<span
                                                    class="text-danger">*</span></label>
                                                    <!-- <input type="text" id="category_id" category_id="category_id" class="form-control " value="" placeholder="Enter Your category_id" autofocus required />  -->
                                            <select name="category_id" id="category_id"
                                                class="form-select form-control">
                                                <option value="">Select Category</option>
                                                <?php
                                                $records = mysqli_query($conn, "SELECT category_name,id  From blogcategory");  // Use select query here
                                                while ($data = mysqli_fetch_array($records))
                                                {
                                                    echo "<option value='" . $data['id'] . "'>" . $data['category_name'] . "</option>";  // displaying data in option menu
                                                }
                                            ?>
                                                <!-- <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option> -->
                                            </select>
                                            <p class="text-danger"><?php if($errors['category_id']) { echo $errors['category_id']; } ?></p>
                                        </div>
                                        
                                        <!--Start Form Field  -->
                                        <div class="input-form my-2 <?php if($errors['category_name']) { echo 'has-error'; } ?>">
                                            <label class="form-label" for="category_name">Category Name<span
                                                    class="text-danger">*</span></label>
                                            <input type="text" id="category_name" name="category_name"
                                                class="form-control " value="<?php echo $_POST['category_name']; ?>" placeholder="Enter Your Category Name"
                                                autofocus required />
                                                <p class="text-danger"><?php if($errors['category_name']) { echo $errors['category_name']; } ?></p>
                                        </div>
                                        <?php
                                         ?>
                                        <div class="input-form my-2 <?php if($errors['show_in_nav']) { echo 'has-error'; } ?>">
                                            <label class="form-label" for="show_in_nav">Show Navigation<span
                                                    class="text-danger">*</span></label>
                                                    <div>
                                            <input type="radio" id="show_in_nav" value="yes" name="show_in_nav"/> Yes
                                            <input type="radio" id="show_in_nav" value="no" name="show_in_nav"/> No
                                            <p class="text-danger"><?php if($errors['show_in_nav']) { echo $errors['show_in_nav']; } ?></p>

                                        </div>
                                        </div>
                                        <div class="input-form my-2">
                                            <hr>
                                            <div class="input-form my-1">
                                            <button type="submit" name="submit" value="submit"
                                                class="btn btn-success"><b>Save</b></button>
                                                <?php 
                                                if(isset($_POST['submit'])){
                                                    if($msg_name=="")
                                                    $msg_success = "You filled this form up correctly";
                                                    }?>
                                            <button type="reset" name="reset" value="reset"
                                                class="btn btn-secondary"><b>Reset</b></button>
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
    <script>
        ClassicEditor
            .create( document.querySelector( '#editor' ) )
            .catch( error => {
                console.error( error );
            } );
    </script>


<?php include(__DIR__ . './../includes/footer.php'); ?>