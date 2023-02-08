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
      // $category_id = null;
      $search = $_GET['s'];
      $sql = "SELECT * FROM blog WHERE title LIKE '%$search%' OR description LIKE '%$search%'";
      // $sql = "SELECT blog.id, blog.category_id, blog.description,blog.title,blog.image FROM blog
      // LEFT JOIN blogcategory ON blog.category_id = blogcategory.id
      // WHERE blog.id = {$id}";
      $result = mysqli_query($conn, $sql) or die("Query Failed.");
      if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_assoc($result)) {
          $category_id = $row['category_id'];
      ?>
      <div class="col-sm-4">
      <h2 class="fw-bold py-3 justify-content-center"> <?php echo $row['title']; ?></h2>
        <figure>  
          <img class="single-feature-image w-100" src="admin/upload/<?php echo $row['image']; ?>" alt=""/>
        </figure>
        <div class="txt">
            <h5 class="mt-3"><?php echo $row['description']; ?></h5>
        </div>
        <br>
      </div>
      <?php }
      }else{
        echo "<h2>No Record Found.</h2>";
      } ?>
      
    </div>
  </div>
  <!-- End News blog  -->


<?php include('./footer.php'); ?>