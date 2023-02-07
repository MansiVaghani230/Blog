<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="./assets/css/bootstrap.css" rel="stylesheet">
  <link href="./assets/css/fontawesomecss/all.css" rel="stylesheet">
  <link href="./assets/css/style.css" rel="stylesheet">
  <link href="./assets/css/owlcarouselcss/owl.carousel.min.css" rel="stylesheet">
  <link href="./assets/css/owlcarouselcss/owl.theme.default.min.css" rel="stylesheet">
</head>
<body>
<?php
include('./admin/database.php');
    ?>
    <section>
        <div class="container-fluid themcolor">
          <div class="container ">
            <div class="row text-center">
              <div class="col-lg-12 col-sm-12">
                <div class="nav-container py-4 onlylink border-bottom border-secondary">
                  <div class="header-logo">
                    <a href="index.php" class="header-logo-container sh-table-small">
                      <div class="sh-table-cell">
                        <h1 class="">Probitmine</h1>
                        <!-- <img class="sh-standard-logo" src="image/news-logo.png" alt="Gillion News Demo"> -->
                      </div>
                    </a>
                  </div>
                </div>
              </div>
        
              <div class="col-lg-12 col-12 ">
                <nav class="navbar navbar-expand-lg sh-header-standard py-0 justify-content-center onlylink">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-center d-flex" id="navbarNavAltMarkup">
                    <?php
                      $sql = "SELECT * FROM blogcategory Where show_in_nav = 'y'  LIMIT 10";
                      $query = mysqli_query($conn, $sql);
                      while ($row = mysqli_fetch_assoc($query)) {
                    ?>
                      <div class="navbar-nav py-2">
                        <a class="nav-link" href="index.php"><?php echo $row['category_name']; ?></a>
                      </div>
                      <?php } ?>
                    </div>   
                </nav>
              </div>
            </div>
          </div>
        </div>
      </section>
