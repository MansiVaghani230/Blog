<?php
include(__DIR__ . '/../includes/header.php'); // Ensure this path is correct
?>
<div class="content-wrapper container-xxl p-0 pt-5">
    <div class="card mb-4 d-flex">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h5>List of BlogCategory</h5>
            <div class="col-sm-2 align-items-start justify-content-end me-2">
                <a href="./create.php" class="btn btn-dark float-end"><i class="fa fa-plus me-1"></i><b>Create</b></a>
            </div>
        </div>
        <div class="card-body">
            <table id="datatablesSimple">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>name</th>
                        <th>Show In</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include('../database.php'); 
                    $sql = "SELECT * from blogcategory";
                    $query = mysqli_query($conn, $sql);
                    while ($row = mysqli_fetch_assoc($query)) {
                    ?>
                    <tr>
                        <td><?php echo $row['id']; ?></td>
                        <td><?php echo $row['category_name']; ?></td>
                        <td><?php echo $row['show_in_nav']; ?></td>
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
<?php include(__DIR__ . '/../includes/footer.php'); // Ensure this path is correct ?>
