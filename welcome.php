
<?php
include('./header.php');
?>

<div class="container">    
        <?php
            $sql = "SELECT * from blogcategory";
            $query = mysqli_query($conn, $sql);
            while ($category = mysqli_fetch_assoc($query)) {
        ?>
    <div class="row mt-5">
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
                 $cid = $category['id'];
            // exit;
                $sql = "SELECT * from blog Where category_id = $cid LIMIT 4";

                $query1 = mysqli_query($conn, $sql);

            while ($product = mysqli_fetch_assoc($query1)) {
            ?>
            
            <div class="col-md-4 col-sm-12 hover01">
                    <div class="item">
                        <a href="blog.php?id=<?php echo $product['id']; ?>">
                        <figure><img  src="admin/upload/<?php echo $product['image']; ?>" alt="" class="w-100"/></figure> 
                        <div class="txt">
                            <h5 class="mt-3"><?php echo $product['title']; ?></h5>
                        </div>
                        </a>
                    </div>
                <!-- </div> -->
            </div>
            <?php } ?>
            </div>
      
    <?php } ?>
</div>
    
    <?php
include('./footer.php');
?>
