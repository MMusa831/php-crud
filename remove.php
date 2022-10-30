<?php
include "db_conn.php";
$id = $_GET['id'];
$sql = "DELETE FROM `students` WHERE id = $id";
$result = mysqli_query($conn, $sql);

if ($result) {
    header('location: index.php?msg= User removed successfully!');
}else {
    echo 'failed' . mysqli_error($conn);
}
