<?php
session_start();

// Hubungkan ke database (ganti dengan kredensial Anda)
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "nama_database";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Tangani pembaruan nama
if(isset($_POST['new_name'])) {
    $new_name = $_POST['new_name'];
    $user_id = $_SESSION['user_id'];

    $sql = "UPDATE users SET name='$new_name' WHERE id='$user_id'";
    $result = $conn->query($sql);

    if ($result === TRUE) {
        $_SESSION['name'] = $new_name;
        echo "Nama berhasil diperbarui.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Tangani pembaruan gambar profil
if(isset($_FILES['new_profile_picture'])) {
    $file_name = $_FILES['new_profile_picture']['name'];
    $file_tmp = $_FILES['new_profile_picture']['tmp_name'];
    $file_type = $_FILES['new_profile_picture']['type'];
    
    move_uploaded_file($file_tmp, "img/".$file_name);
    $user_id = $_SESSION['user_id'];

    $sql = "UPDATE users SET profile_picture='$file_name' WHERE id='$user_id'";
    $result = $conn->query($sql);

    if ($result === TRUE) {
        echo "Gambar profil berhasil diperbarui.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
</head>
<body>
<form action="update_profile.php" method="post" enctype="multipart/form-data">
    <input type="text" name="new_name" placeholder="Nama baru">
    <input type="file" name="new_profile_picture">
    <button type="submit" name="submit">Simpan</button>
</form>

</body>
</html>