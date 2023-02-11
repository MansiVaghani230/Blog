
    <title>Crypto Blog</title>
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
            // if($_POST['image'] == null) {
            //     $errors['image'] = "Image should not be empty";
            // }
            else{
            $id = $_POST['id'];
            $title = filter($_POST['title']);
            $slug = slug(filter($_POST['slug']));
            $category_id = filter($_POST['category_id']);
            $description = filter($_POST['description']);
            $files = $_FILES['image'];

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

            $sql = mysqli_query($conn, "UPDATE `blog` SET `title`='$title', `slug`='$slug',
            `description`='$description',`category_id`='$category_id' WHERE `id`='$id'");
            if ($destinationfile != '') {

                $sql = mysqli_query($conn, "UPDATE `blog` SET `image`='$destinationfile',`title`='$title', `slug`='$slug'
                                                `description`='$description',`category_id`='$category_id' WHERE `id`='$id'");
            } else {

                echo "";
            }
            if (!$sql) {
                echo mysqli_error($conn);
            } else {
                header ("Location:/index.php");
                echo "<meta http-equiv='refresh' content='0,index.php' />";
            }
        } 
      }
    ?>

    <?php
         include(__DIR__ . './../database.php');
            $id = $_GET['id'];
            $sql = "SELECT * from blog WHERE id='$id'";
            $query = mysqli_query($conn, $sql);

            ?>
    <?php
            while ($row = mysqli_fetch_assoc($query)) {
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
                                    <h5 class="card-title">Edit blog</h5>
                                    <div class=" float-end">
                                        <!-- <button name="submit" type="submit" value="submit" class="btn btn-primary">Submit</botton></br> -->
                                    </div>
                                </div>
                                <div class="card-body pt-0">
                                    <form name="blog" id="blog" class="validate-form1 needs-validation" action=""
                                        method="POST" enctype="multipart/form-data" novalidate>

                                        <!--Start Form Field  -->
                                        <!-- <input type="text" id="id" name="id" placeholder="id..." value="<?php echo $row['id']; ?>" readonly> -->
                                        <input type="hidden" id="id" name="id" class="form-control "
                                                value="<?php echo $row['id']; ?>" />

                                        <div class="input-form my-2 <?php if($errors['title']) { echo 'has-error'; } ?>">
                                            <label class="form-label" for="title">Title<span
                                                    class="text-danger">*</span></label>
                                            <input type="text" id="title" name="title" class="form-control "
                                                value="<?php echo $row['title']; ?>" placeholder="Enter Your Name"
                                                autofocus required />
                                                <p class="text-danger"><?php if($errors['title']) { echo $errors['title']; } ?></p>
                                        </div>

                                        <div class="input-form my-2 <?php if($errors['slug']) { echo 'has-error'; } ?>">
                                            <label class="form-label" for="slug">Slug<span
                                                    class="text-danger">*</span></label>
                                            <input type="text" id="slug" name="slug" class="form-control "
                                                value="<?php echo $row['slug']; ?>" placeholder="Enter Your Slug"
                                                autofocus required />
                                                <p class="text-danger"><?php if($errors['slug']) { echo $errors['slug']; } ?></p>
                                        </div>
                                        <div class="input-form my-2  <?php if($errors['category_id']) { echo 'has-error'; } ?>">
                                            <label class="form-label" for="category_id">Blog Category<span
                                                    class="text-danger">*</span></label>
                                            <!-- <input type="text" id="category_id" category_id="category_id" class="form-control " value="" placeholder="Enter Your category_id" autofocus required />  -->
                                            <select name="category_id" id="category_id"
                                                class="form-select form-control">
                                                <?php
                                                $records = mysqli_query($conn, "SELECT category_name,id  From blogcategory");  // Use select query here
                                                while ($data = mysqli_fetch_array($records))
                                                {
                                                    if($data['id']==$row['category_id'])
                                                    echo "<option value='" . $data['id'] . "' selected>" . $data['category_name'] . "</option>";  // displaying data in option menu
                                                    else
                                                    echo "<option value='" . $data['id'] . "' >" . $data['category_name'] . "</option>";  // displaying data in option menu
                                                }
                                            ?>
                                                <!-- <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option> -->
                                            </select>
                                            <p class="text-danger"><?php if($errors['category_id']) { echo $errors['category_id']; } ?></p>
                                        </div>
                                        <div class="input-form my-2">
                                            <label class="form-label" for="image">Image<span
                                                    class="text-danger">*</span></label>
                                            <input type="file" id="image" name="image" class="form-control "
                                                value="" placeholder="Enter Your image"
                                                autofocus />
                                                <!-- <p class="text-danger"><?php if($errors['image']) { echo $errors['image']; } ?></p> -->
                                        </div>
                                       

                                        <div class="input-form my-2">
                                            <label class="form-label" for="description" >Description<span
                                                    class="text-danger">*</span></label>
                                            <textarea  id="editor" name="description"><?php echo $row['description']; ?></textarea>
                                        </div>

                                        <!-- <div class='input-form my-2'>
                                            <label class='form-label' for='fp-default'>Status(dactive/active)</label>
                                            <div class='form-check form-switch form-check-primary'>
                                                <input type='checkbox' id='status' value='1' name='status'
                                                    class='form-check-input' checked>
                                                <label class='form-check-label' for='status'></label>
                                            </div>
                                        </div> -->
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
                        <div class="col-sm-4">
                            <img src="<?php echo $row["image"]; ?>" class="w-100 box">
                        </div>
                        <?php } ?>
                        <!-- /Bootstrap Validation -->
                    </div>
                </section>
            </div>
        </div>
    </div>
    <?php  ?>
    <script>
        ClassicEditor
            .create( document.querySelector( '#editor' ) )
            .catch( error => {
                console.error( error );
            } );
    </script>


<?php include(__DIR__ . './../includes/footer.php'); ?>