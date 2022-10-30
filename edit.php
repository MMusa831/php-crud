<?php

include "db_conn.php";
include "includes/header.php";
include "db_conn.php";
$id = $_GET['id'];

if (isset($_POST['submit'])) {

    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];

    $sql = "UPDATE `students` SET `id`='$id',`first_name`='$first_name',
    `last_name`='$last_name',`email`='$email',`gender`='$gender' WHERE id = $id";

    $result = mysqli_query($conn, $sql);
    if ($result) {
        header("location: index.php?msg=User updated successfully");
    } else {
        echo "failed!";
    }
}

?>

<div class="container">
    <div class="text-center mb-4">
        <h3>Edit user Information</h3>
        <p class="text-mutes">Click update when you finished</p>
    </div>

    <?php

    $sql = "SELECT * FROM `students` WHERE id = $id LIMIT 1";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    ?>

    <div class="container d-flex justify-content-center">
        <form action="" method="POST" style="width: 50vw; min-width: 300px">
            <div class="row mb-3">
                <div class="col">
                    <label for="form-label">First Name:</label>
                    <input type="text" class="form-control" name="first_name" value="<?php echo $row['first_name'] ?>">
                </div>
                <div class="col">
                    <label for="form-label">Last Name:</label>
                    <input type="text" class="form-control" name="last_name" value="<?php echo $row['last_name'] ?>">
                </div>
            </div>
            <div class="mb-3">
                <label for="form-label">Email:</label>
                <input type="email" class="form-control" name="email" value="<?php echo $row['email'] ?>">
            </div>
            <div class="form-group mb-3">
                <label for="">Gender:</label> &nbsp;
                <input type="radio" class="from-check-input" name="gender" id="male" value="male" <?php echo ($row['gender'] == 'male') ? "checked" : ""; ?>>
                <label for="male" class="form-input-label">Male</label> &nbsp;

                <input type="radio" class="from-check-input" name="gender" id="female" value="female" <?php echo ($row['gender'] == 'female') ? "checked" : ""; ?>>
                <label for="female" class="form-input-label">Female</label>
            </div>
            <button type="submit" class="btn btn-success" name="submit">Update</button>
            <a href="index.php" class="btn btn-danger">Cancel</a>
        </form>
    </div>
</div>
<?php
include "includes/header.php";
?>