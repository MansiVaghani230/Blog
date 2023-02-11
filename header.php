<?php 

function prepareList(array $items, $pid = 0)
{
    $output = array();

    # loop through the items
    foreach ($items as $item) {

        # Whether the parent_id of the item matches the current $pid
        if ((int) $item['parent_id'] == $pid) {

            # Call the function recursively, use the item's id as the parent's id
            # The function returns the list of children or an empty array()
            if ($children = prepareList($items, $item['id'])) {

                # Store all children of the current item
                $item['children'] = $children;
            }

            # Fill the output
            $output[] = $item;
        }
    }

    return $output;
}


?>

<!DOCTYPE html>
<html lang="en" class="h-100">
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
<body class="h-100 d-flex flex-column">
<?php include('./admin/database.php'); ?>
    <section class="sticky-top">
        <div class="container-fluid themcolor">
          <div class="container ">
            <div class="row text-center">
              <div class="col-lg-12 col-sm-12">
                <div class="nav-container py-4 onlylink border-bottom border-secondary">
                  <div class="header-logo">
                    <a href="index.php" class="header-logo-container sh-table-small">
                      <div class="sh-table-cell">
                      <a class='nav-link' href="welcome.php"><h1 class="">Probitmine</h1></a>
                        <!-- <img class="sh-standard-logo" src="image/news-logo.png" alt="Gillion News Demo"> -->
                      </div>
                    </a>
                  </div>
                </div>
              </div>
        
              <div class="col-lg-12 col-12">
             
              <nav class="navbar navbar-expand-lg navbar-dark">
                <div class="container-fluid">
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto ms-auto mb-2 mb-lg-0">
                      <li class="nav-item">
                        <a class='nav-link active' aria-current="page" href="index.php">Home</a>
                      </li>

                      <?php
                // include "config.php";

                    if(isset($_GET['cid'])){
                      $cat_id = $_GET['cid'];
                    }
                    
                    // $sql = "SELECT * FROM blogcategory Where show_in_nav = 'yes' and parent_id IS NULL LIMIT 10";
                    $sql = "SELECT * FROM blogcategory Where show_in_nav = 'yes'";
                    $result = mysqli_query($conn, $sql);
                    $items = array();
                    while($row = mysqli_fetch_assoc($result)) {
                      $items[] = $row;
                    }

                    $list = prepareList($items);
?>

<?php foreach($list as $item) { ?>

<li class="nav-item dropdown">
  <!-- <a class='nav-link active' aria-current="page" href="index.php">Home</a> -->
  <?php if(isset($item['children'])) { if(count($item['children']) > 0){ ?>
    <a class='nav-link' href='cryptoblog.php?title=<?php echo $item['slug']; ?>'><?php echo $item['category_name']; ?></a>
  <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
    <?php foreach($item['children'] as $subitem) { ?>
    <li><a class="dropdown-item" href="cryptoblog.php?title=<?php echo $subitem['slug']; ?>"><?php echo $subitem['category_name']; ?></a></li>
    <?php } ?>
  </ul>
  <?php } ?>
</li>                  
<?php }  else{ ?>
  <a class='nav-link' href='cryptoblog.php?title=<?php echo $item['slug']; ?>'><?php echo $item['category_name']; ?></a>
<?php }}?>

<?php
                    if(mysqli_num_rows($result) > 0){
                      $active = "";
                    
                      while($row = mysqli_fetch_assoc($result)) {
                        if(isset($_GET['cid'])){
                          if($row['id'] == $cat_id){
                            $active = "active";
                          }else{
                            $active = "";
                          }
                        } ?>
                       
                       <?php if($row['parent_id'] == null) { ?>

                      

                       <?php } ?>

                        <?php
                          
                        }
                      } ?>

                    </ul>
                    <form class="d-flex" id="search" name="search" method="GET" action="./search.php">
                      <input class="form-control me-2" name="s" id="s" type="search" placeholder="Search" aria-label="Search">
                      <button class="btn btn-outline-light" type="submit"><i class="fa fa-search"></i></button>
                    </form>
                  </div>
                </div>
              </nav>
              </div>
            </div>
          </div>
        </div>
      </section>


