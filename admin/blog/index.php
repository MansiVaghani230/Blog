<?php
include(__DIR__ . './../includes/header.php');
?>
    <div class="content-wrapper container-xxl p-0 pt-3">
        <div class="card mb-4">
            <div class="card-header bg-light"><i class="fas fa-table me-1"></i> Blog Table</div>
                <div class="card-body">
                <h2><a href="./create.php" class="btn btn-primary"><i class="fa fa-plus me-1"></i><B>Create</b></a></h2>
                <table id="datatablesSimple">
                    <thead>
                        <tr>
                        <th>id</th>
                        <th>Image</th>
                        <th>Title</th>
                        <th>Category</th>
                        <th>Description</th>
                        <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <?php
                                $sql = "SELECT * from blog";
                                $query = mysqli_query($conn, $sql);
                                while ($row = mysqli_fetch_assoc($query)) {
                            ?>
                            <td><?php echo $row['id']; ?></td>
                            <td> <img src="<?php echo $row["image"]; ?>" height=100px; width="100px;"></td>
                            <td><?php echo $row['title']; ?></td>
                            <td><?php echo $row['category_id']; ?></td>
                            <td><?php echo $row['description']; ?></td>
                            <td><a href="./update.php?id=<?php echo $row['id']; ?>"><button class="btn btn-success"><i class=""></i>edit</button></a>
                                <a href="./delete.php?id=<?php echo $row['id']; ?>"><button class="btn btn-danger"><i class=""></i>delete</button></a>
                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
<?php
include(__DIR__ . './../includes/footer.php');
include(__DIR__ . './../includes/script.php');
?>