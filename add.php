<?php
include_once('connection.php');

if(isset($_POST['register']))
{
    $name = $_POST['name'];
    $username = $_POST['username'];
    $pass = md5($_POST['password']);

    $sql = "INSERT INTO `tbl_user`(`name`, `username`, `password`) VALUES ('$name','$username','$pass')";
    $result = mysqli_query($conn, $sql);

    if($result) {
        header('location:index2.php?register=success');
    } else {
        header('location:add.php?register=failed');
    }
}
?>