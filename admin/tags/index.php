<?php
include(__DIR__ . '/../database.php'); // Ensure the database connection file is included
include(__DIR__ . '/../includes/header.php'); // Include the header

// Check if the database connection is successful
if (!$conn) {
    die('Database connection failed: ' . mysqli_connect_error());
}

// Fetch records from the correct table
$sql = "SELECT * FROM `tags`";
$query = mysqli_query($conn, $sql);

if (!$query) {
    die('Error: ' . mysqli_error($conn));
}
?>

<div class="content-wrapper container-xxl p-0 pt-5">
    <div class="card mb-4 d-flex">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h5>List of Tags</h5>
            <div class="col-sm-2 align-items-start justify-content-end me-2">
                <a href="./create.php" class="btn btn-dark float-end"><i class="fa fa-plus me-1"></i><b>Create</b></a>
            </div>
        </div>
        <div class="card-body">
            <table id="datatablesSimple">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Slug</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                <?php
                while ($row = mysqli_fetch_assoc($query)) {
                ?>
                    <tr>
                        <td><?php echo $row['id']; ?></td>
                        <td><?php echo htmlspecialchars($row['name']); ?></td>
                        <td><?php echo htmlspecialchars($row['slug']); ?></td>
                        <td>
                            <a href="./update.php?id=<?php echo $row['id']; ?>"><button class="btn btn-success"><i class="fa-solid fa-pen-to-square"></i></button></a>
                            <a href="./delete.php?id=<?php echo $row['id']; ?>"><button class="btn btn-danger"><i class="fa-solid fa-trash"></i></button></a>
                        </td>
                    </tr>
                <?php } ?>
                </tbody>
            </table>            
        </div>
    </div>
</div>

<?php include(__DIR__ . '/../includes/footer.php'); ?>
