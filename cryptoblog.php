<?php
include('./header.php');
?>
<section>
        <div class="container py-4">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="light_border">
                        <div class="headline">
                            <?php
                                if(isset($_GET['cid'])){
                                $cat_id = $_GET['cid'];
                                $sql1 = "SELECT * FROM blogcategory WHERE id = {$cat_id}";
                                $result1 = mysqli_query($conn, $sql1) or die("Query Failed.");
                                $row1 = mysqli_fetch_assoc($result1);
                                ?>
                                <h2 class="page-heading mb-0"><?php echo $row1['category_name']; ?></h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                    <?php
                        $sql = "SELECT blog.id, blog.category_id, blog.description,blog.title,blog.image FROM blog
                        LEFT JOIN blogcategory ON blog.category_id = blogcategory.id
                        WHERE blog.category_id = {$cat_id}";
                        $result = mysqli_query($conn, $sql) or die("Query Failed.");
                        if(mysqli_num_rows($result) > 0){
                        while($row = mysqli_fetch_assoc($result)) {
                    ?>
                <div class="col-sm-4">
                    <div class="wrapper">
                        <div class="box vintage mt-4">
                        <a class="post-img" href="blog.php?id=<?php echo $row['id']; ?>"><img class="w-100" src="admin/upload/<?php echo $row['image']; ?>" alt=""/></a>
                        <h2 class="mt-3 fw-bold anchorlink"><a  href='blog.php?id=<?php echo $row['id']; ?>'><?php echo $row['title']; ?></a></h2>
                        </div>
                    </div>
                </div>
                <?php }
                            }else{
                            echo "<h2>No Record Found.</h2>";
                            }

                                }
                        ?>
            </div>
        </div>
</section>
<?php include('./footer.php'); ?>