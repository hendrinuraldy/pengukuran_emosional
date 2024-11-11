<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>
    
</body>
</html>
<?php
session_start();
include_once('connection.php');

if (isset($_POST['login'])) {

    $username = $_POST['username'];
    $password = md5($_POST['password']);

    $sql = "SELECT * FROM `tbl_user` WHERE `username`='$username' AND `password`='$password'";
    $result = mysqli_query($conn, $sql);

    if (empty($_POST['username']) && empty($_POST['password'])) {
        echo "<script>
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Please Fill Username and Password'
                }).then(() => {
                    window.location.href = 'index2.php';
                });
              </script>";
        exit;
    } elseif (empty($_POST['password'])) {
        echo "<script>
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Please Fill Password'
                }).then(() => {
                    window.location.href = 'index2.php';
                });
              </script>";
        exit;
    } elseif (empty($_POST['username'])) {
        echo "<script>
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Please Fill Username'
                }).then(() => {
                    window.location.href = 'index2.php';
                });
              </script>";
        exit;
    } else {
        if (mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_array($result);
            $name = $row['name'];
            $username = $row['username'];
            $password = $row['password'];

            if ($username == $username && $password == $password) {
                $_SESSION['name'] = $name;
                $_SESSION['username'] = $username;
                $_SESSION['password'] = $password;
                header('location:welcome.php');
            }
        } else {
            echo "<script>
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: 'Invalid Username or Password'
                    }).then(() => {
                        window.location.href = 'index2.php';
                    });
                  </script>";
            exit;
        }
    }

}
?>
