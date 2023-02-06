<?php
include(__DIR__ . './../includes/header.php');
?>
    <div class="content-wrapper container-xxl p-0 pt-3">
        <div class="card mb-4">
            <div class="card-header bg-light"><i class="fas fa-table me-1"></i> Blog Category Table</div>
                <div class="card-body">
                <h2><a href="./create.php" class="btn btn-primary"><i class="fa fa-plus me-1"></i><B>Create</b></a></h2>
                <table id="datatablesSimple">
                    <thead>
                        <tr>
                        <th>id</th>
                        <th>name</th>
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
                        <td><?php echo $row['id']; ?></td>
                        <td><?php echo $row['category_name']; ?></td>
                        <td><a href="./update.php?id=<?php echo $row['id']; ?>"><button class="btn btn-success">Edit</button></a>
                            <a href="./delete.php?id=<?php echo $row['id']; ?>"><button class="btn btn-danger">Delete</button></a>
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