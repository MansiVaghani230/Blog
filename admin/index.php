<?php
// Include the database connection at the start
include(__DIR__ . '/database.php'); // Correct the path to the database file
include(__DIR__ . '/includes/header.php'); // Correct the path to the header file
?>
<div class="container-fluid px-4">
    <h1 class="my-4">Dashboard</h1>

    <div class="row">
        <!-- Blog Category Count -->
        <div class="col-xl-3 col-md-6">
            <div class="card bg-primary text-white mb-4">
                <div class="card-body">
                    <h5>Total BlogCategory</h5>
                </div>
                <?php
                if ($conn) {
                    $sql = "SELECT * from blogcategory";
                    $query = mysqli_query($conn, $sql);

                    if ($query) {
                        $row = mysqli_num_rows($query);
                        echo '<h4 class="mx-3">' . $row . '</h4>';
                    } else {
                        echo '<h4 class="mx-3">No Data</h4>';
                    }
                } else {
                    echo '<h4 class="mx-3">Database connection failed.</h4>';
                }
                ?>
            </div>
        </div>

        <!-- Blog Count -->
        <div class="col-xl-3 col-md-6">
            <div class="card bg-warning text-white mb-4">
                <div class="card-body">
                    <h5>Total Blog</h5>
                </div>
                <?php
                if ($conn) {
                    $sql = "SELECT * from blog";
                    $query = mysqli_query($conn, $sql);

                    if ($query) {
                        $row = mysqli_num_rows($query);
                        echo '<h4 class="mx-3">' . $row . '</h4>';
                    } else {
                        echo '<h4 class="mx-3">No Data</h4>';
                    }
                } else {
                    echo '<h4 class="mx-3">Database connection failed.</h4>';
                }
                ?>
            </div>
        </div>

        <!-- Tags Count -->
        <div class="col-xl-3 col-md-6">
            <div class="card bg-success text-white mb-4">
                <div class="card-body">
                    <h5>Total Tags</h5>
                </div>
                <?php
                if ($conn) {
                    $sql = "SELECT * from tags";
                    $query = mysqli_query($conn, $sql);

                    if ($query) {
                        $row = mysqli_num_rows($query);
                        echo '<h4 class="mx-3">' . $row . '</h4>';
                    } else {
                        echo '<h4 class="mx-3">No Data</h4>';
                    }
                } else {
                    echo '<h4 class="mx-3">Database connection failed.</h4>';
                }
                ?>
            </div>
        </div>

 

        <!-- Contact Us Count -->
        <div class="col-xl-3 col-md-6">
            <div class="card bg-info text-white mb-4">
                <div class="card-body">
                    <h5>Total Contact Us</h5>
                </div>
                <?php
                if ($conn) {
                    $sql = "SELECT * from contactus";
                    $query = mysqli_query($conn, $sql);

                    if ($query) {
                        $row = mysqli_num_rows($query);
                        echo '<h4 class="mx-3">' . $row . '</h4>';
                    } else {
                        echo '<h4 class="mx-3">No Data</h4>';
                    }
                } else {
                    echo '<h4 class="mx-3">Database connection failed.</h4>';
                }
                ?>
            </div>
        </div>


               <!-- Users Count -->
               <div class="col-xl-3 col-md-6">
            <div class="card bg-danger text-white mb-4">
                <div class="card-body">
                    <h5>Total Users</h5>
                </div>
                <?php
                if ($conn) {
                    $sql = "SELECT * from users";
                    $query = mysqli_query($conn, $sql);

                    if ($query) {
                        $row = mysqli_num_rows($query);
                        echo '<h4 class="mx-3">' . $row . '</h4>';
                    } else {
                        echo '<h4 class="mx-3">No Data</h4>';
                    }
                } else {
                    echo '<h4 class="mx-3">Database connection failed.</h4>';
                }
                ?>
            </div>
        </div>

 
        
    </div>
</div>
<?php
include(__DIR__ . '/includes/footer.php'); // Correct the path to the footer file
?>
