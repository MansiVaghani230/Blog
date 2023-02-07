
<?php
include('./header.php');
?>

<div class="container">    
        <?php
            $sql = "SELECT * from blogcategory";
            // $sql = "SELECT * from blog";
            $query = mysqli_query($conn, $sql);
            while ($category = mysqli_fetch_assoc($query)) {
        ?>
    <div class="row">
        <div class="col-md-12 col-sm-12">
            <div class="light_border">
                <div class="headline">
                        <h2 class="page-heading mb-0"><?php echo $category['category_name']; ?></h2>
                </div>
            </div>
        </div>
    </div> 
    <div class="row">
            <?php
                // $sql = "SELECT * from blogcategory";
                 $cid = $category['id'];
            // exit;
                $sql = "SELECT * from blog Where category_id = $cid LIMIT 3";

                $query1 = mysqli_query($conn, $sql);

            while ($product = mysqli_fetch_assoc($query1)) {
            ?>
            
            <div class="col-md-4 col-sm-12">
                <div class="grid-container">
                    <div class="item1">
                        <a href="blog.php?id=<?php echo $product['id']; ?>">
                        <img  src="admin/upload/<?php echo $product['image']; ?>" alt="" class=" gallery__img"/> 
                            <div class="gradiant"></div>
                            <div class="title">
                                <h3 class="mb-0"><?php echo $product['title']; ?></h3>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <?php } ?>
            </div>
      
    <?php } ?>
</div>
    
    <?php
include('./footer.php');
?>
