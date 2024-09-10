<?php
// Include the database connection first
include(__DIR__ . '/../database.php'); // Corrected path to include the database connection
include(__DIR__ . '/../includes/header.php'); // Corrected path to the header file
?>
<div class="content-wrapper container-xxl p-0 pt-5">
    <div class="card mb-4 d-flex">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h5>List of Blog</h5>
            <div class="col-sm-2 align-items-start justify-content-end me-2">
                <a href="./create.php" class="btn btn-dark float-end"><i class="fa fa-plus me-1"></i><b>Create</b></a>
            </div>
        </div>
        <div class="card-body">
            <table id="datatablesSimple">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>IMAGE</th>
                    <th>TITLE</th>
                    <th>CATEGORY</th>
                    <th>ACTIONS</th>
                </tr>
                </thead>
                <tbody>
                <?php
                // Check if the connection is successful before running the query
                if ($conn) {
                    $sql = "SELECT B.*, C.category_name FROM blog AS B LEFT JOIN blogcategory AS C ON B.category_id = C.id";
                    $query = mysqli_query($conn, $sql);
                    while ($row = mysqli_fetch_assoc($query)) {
                        ?>
                        <tr>
                            <td><?php echo $row['id']; ?></td>
                            <td><img src="<?php echo $row['image']; ?>" height="100px" width="100px"></td>
                            <td><?php echo $row['title']; ?></td>
                            <td><?php echo $row['category_name']; ?></td>
                            <td>
                                <a href="./update.php?id=<?php echo $row['id']; ?>"><button class="btn btn-success"><i class="fa-solid fa-pen-to-square"></i></button></a>
                                <a href="./delete.php?id=<?php echo $row['id']; ?>"><button class="btn btn-danger"><i class="fa-solid fa-trash"></i></button></a>
                            </td>
                        </tr>
                        <?php
                    }
                } else {
                    echo '<tr><td colspan="5">Database connection failed.</td></tr>';
                }
                ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?php include(__DIR__ . '/../includes/footer.php'); ?> <!-- Corrected path to the footer file -->
