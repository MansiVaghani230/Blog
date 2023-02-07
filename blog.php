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
      $id = $_GET['id'];
      $sql = "SELECT blog.id, blog.category_id, blog.description,blog.title,blog.image FROM blog
      LEFT JOIN blogcategory ON blog.category_id = blogcategory.id
      WHERE blog.id = {$id}";
      $result = mysqli_query($conn, $sql) or die("Query Failed.");
      if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_assoc($result)) {
      ?>
      <div class="col-sm-8 hover_color">
      <h2 class="fw-bold py-3 justify-content-center"> <?php echo $row['title']; ?></h2>
        <img class="single-feature-image" src="admin/upload/<?php echo $row['image']; ?>" alt=""/>
        <p class="pt-4"> <?php echo $row['description']; ?></p>
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