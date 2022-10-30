<?php
include "db_conn.php";

if (isset($_POST['submit'])) {
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];

    $sql = "INSERT INTO `students`(`id`, `first_name`, `last_name`, `email`, `gender`) 
    VALUES (Null, '$first_name','$last_name','$email','$gender')";

    $result =mysqli_query($conn, $sql);
    if ($result) {
        header("location: index.php?msg=New user added successfully");
        }else {
            echo "failed!";
        }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <!-- Font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>PHP Crud</title>
</head>

<body>
    <nav class="navbar navbar-light justify-content-center fs-3 mb-5" style="background-color: #00ff5573">
        Php DRUD Application
    </nav>
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
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>