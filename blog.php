<?php
include('./header.php');
?>

  <div class="container py-4">
    <!-- <div class="row">
      <div class="col-md-12 col-sm-12">
        <div class="light_border">
          <div class="headline">
            <h2 class="mb-0">Singal Blog</h2>
          </div>
        </div>
      </div>
    </div> -->
    <!-- main section blog -->
    <div class="row">
      <?php
      $category_id = null;
      $blog_id = $_GET['title'];

      $sql = "SELECT blog.id, blog.category_id, blog.slug, blog.description, blog.title, blog.image FROM blog
      LEFT JOIN blogcategory ON blog.category_id = blogcategory.id WHERE blog.slug = '{$blog_id}' LIMIT 1";

      $result = mysqli_query($conn, $sql) or die("Query Failed."); ?>

      <div class="col-sm-8 hover_color">
<?php      if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_assoc($result)) {
          $category_id = $row['category_id'];
      ?>
        <h2 class="fw-bold py-3 justify-content-center"> <?php echo $row['title']; ?></h2>
        <img class="single-feature-image w-100" src="admin/upload/<?php echo $row['image']; ?>" alt=""/>
        <p class="pt-4"> <?php echo htmlspecialchars_decode($row['description']); ?></p>
        <br>
        <?php }
      }else{
        echo "<h2>No Record Found.</h2>";
      } ?>
      </div>

<div class="col-sm-4 hover01">
        <div class="row">
          <div class="col-md-12 col-sm-12">
            <div class="light_border headline">
                <h2 class="mb-0">Recent Blog</h2>
            </div>
          </div>
        </div>
        <div class="owl-carousel owl-theme resentblog">
        <?php 
      $sql = "SELECT id, category_id, slug, title, LEFT(description, 120) AS description, image FROM blog WHERE category_id = $category_id and slug != '$blog_id' ORDER BY id DESC LIMIT 5";
      // $sql = "SELECT blog.id, blog.category_id, blog.description,blog.title,blog.image FROM blog
      // LEFT JOIN blogcategory ON blog.category_id = blogcategory.id
      // WHERE blog.id = {$id}";
      $result = mysqli_query($conn, $sql) or die("Query Failed.");
      if(mysqli_num_rows($result) > 0){
    while($recent = mysqli_fetch_assoc($result)) { 
      ?>
          <div class="item">
            <figure><img src="admin/upload/<?php echo $recent['image']; ?>" alt="EMMYLOU"></figure>
            <div class="txt">
              <h5 class="mt-3 text-center"><?php echo $recent['title']; ?></h5>
              <span><?php echo htmlspecialchars_decode($recent['description']); ?></span>
            </div>
          </div>
      <?php }
      } else{
        echo "<h2>No Record Found.</h2>";
      } ?>
        </div>
</div>
      
    </div>
  </div>
  <!-- End News blog  -->


<?php include('./footer.php'); ?>