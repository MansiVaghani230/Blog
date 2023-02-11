<?php
include(__DIR__ . './../includes/header.php');
?>
    <?php
        if (isset($_POST['submit'])) {

            $errors = array();

            if($_POST['title'] == null) {
                $errors['title'] = "Title should not be empty";
            }
            if($_POST['slug'] == null) {
                $errors['slug'] = "Slug should not be empty";
            }
            if($_POST['category_id'] == null) {
                $errors['category_id'] = "Category should not be empty";
            }
            if($_FILES['image'] == null) {
                $errors['image'] = "Image should not be empty";
            }else{
               
            $files = $_FILES['image'];
            $title = filter($_POST['title']);
            $slug = slug(filter($_POST['slug']));
            $category_id = filter($_POST['category_id']);
            $description = filter($_POST['description']);

            // jpg,png forment
            // for image
            $filename = $files['name'];
            $filetmp = $files['tmp_name'];

            $fileext = explode('.', $filename);
            $filecheck = strtolower(end($fileext));
            $fileextstored = array('png', 'jpg', 'jpeg',);

            if (in_array($filecheck, $fileextstored)) {
                $destinationfile = '../assets/image/' . $filename;
                move_uploaded_file($filetmp, $destinationfile);
            }

            $sql = mysqli_query($conn, "INSERT INTO `blog`(`title`,`slug`, `image`, `description`, `category_id`) VALUES ('$title','$slug', '$destinationfile','$description','$category_id')");


            if (!$sql) {
                echo mysqli_error($conn);
            }
            header("Location:/index.php");
            echo "<meta http-equiv='refresh' content='0,index.php' />";
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
                                    <h5 class="card-title">Create blog</h5>
                                    <div class=" float-end">
                                        <!-- <button name="submit" type="submit" value="submit" class="btn btn-primary">Submit</botton></br> -->
                                    </div>
                                </div>
                                <div class="card-body pt-0">
                                    <form name="blog" id="blog" class="validate-form1 needs-validation" action=""
                                        method="POST" enctype="multipart/form-data" novalidate>
                                        <!--Start Form Field  -->
                                        <div class="input-form my-2 <?php if($errors['title']) { echo 'has-error'; } ?>">
                                            <label class="form-label" for="title">Title<span
                                                    class="text-danger">*</span></label>
                                            <input type="text" id="title" name="title" class="form-control" value=""
                                                placeholder="Enter Your title" autofocus required />
                                                <p class="text-danger"><?php if($errors['title']) { echo $errors['title']; } ?></p>
                                        </div>

                                        <div class="input-form my-2 <?php if($errors['slug']) { echo 'has-error'; } ?>">
                                            <label class="form-label" for="slug">Slug<span
                                                    class="text-danger">*</span></label>
                                            <input type="text" id="slug" name="slug" class="form-control" value=""
                                                placeholder="Enter Your Slug" autofocus required />
                                                <p class="text-danger"><?php if($errors['slug']) { echo $errors['slug']; } ?></p>
                                        </div>


                                        <div class="input-form my-2 <?php if($errors['category_id']) { echo 'has-error'; } ?>">
                                            <label class="form-label" for="category_id">Blog Category<span
                                                    class="text-danger">*</span></label>
                                                    <!-- <input type="text" id="category_id" category_id="category_id" class="form-control " value="" placeholder="Enter Your category_id" autofocus required />  -->
                                            <select name="category_id" id="category_id"
                                                class="form-select form-control" required>
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


                                        <div class="input-form my-2 <?php if($errors['image']) { echo 'has-error'; } ?>">
                                            <label class="form-label" for="image">Image<span
                                                    class="text-danger">*</span></label>
                                            <input type="file" id="image" name="image" class="form-control " value=""
                                                placeholder="Enter Your image" autofocus required />
                                                <p class="text-danger"><?php if($errors['image']) { echo $errors['image']; } ?></p>
                                        </div>

                                        <div class="input-form my-2">
                                            <label class="form-label" for="description">Description<span
                                                    class="text-danger">*</span></label>
                                                    <!-- <div id="editor"> -->
                                                        <textarea  id="editor" name="description"></textarea>
                                                      

                                            <!-- <input type="text" id="description" name="description" class="form-control "
                                                value="" placeholder="Enter Your Description" autofocus required /> -->
                                        </div>
                                        <!--End Form Field  -->
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