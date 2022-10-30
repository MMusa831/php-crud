<?php
include "db_conn.php";
include "includes/header.php";

if (isset($_POST['submit'])) {
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];

    $sql = "INSERT INTO `students`(`id`, `first_name`, `last_name`, `email`, `gender`) 
    VALUES (Null, '$first_name','$last_name','$email','$gender')";

    $result = mysqli_query($conn, $sql);
    if ($result) {
        header("location: index.php?msg=New user added successfully");
    } else {
        echo "failed!";
    }
}

?>

<div class="container">
    <div class="text-center mb-4">
        <h3>Add new user</h3>
        <p class="text-mutes">Complete the form below to add new user</p>
    </div>
    <div class="container d-flex justify-content-center">
        <form action="" method="POST" style="width: 50vw; min-width: 300px">
            <div class="row mb-3">
                <div class="col">
                    <label for="form-label">First Name:</label>
                    <input type="text" class="form-control" name="first_name" placeholder="John">
                </div>
                <div class="col">
                    <label for="form-label">Last Name:</label>
                    <input type="text" class="form-control" name="last_name" placeholder="DOE">
                </div>
            </div>
            <div class="mb-3">
                <label for="form-label">Email:</label>
                <input type="email" class="form-control" name="email" placeholder="johndoe@gmail.com">
            </div>
            <div class="form-group mb-3">
                <label for="">Gender:</label> &nbsp;
                <input type="radio" class="from-check-input" name="gender" id="male" value="Male">
                <label for="male" class="form-input-label">Male</label> &nbsp;

                <input type="radio" class="from-check-input" name="gender" id="male" value="Male">
                <label for="female" class="form-input-label">Female</label>
            </div>
            <button type="submit" class="btn btn-success" name="submit">Save</button>
            <a href="index.php" class="btn btn-danger">Cancel</a>
        </form>
    </div>
</div>
<?php
include "includes/footer.php";
?>