<?php
include "db.php";

if (isset($_POST['register'])) {
    $username = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $sql = "INSERT INTO users (username, password) VALUES ('$username', '$password')";
    mysqli_query($conn, $sql);

    echo "Registration successful";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
</head>
<body>
    <h2>User Registration</h2>

    <form method="post">
        Username: <br>
        <input type="text" name="username" required><br><br>

        Password: <br>
        <input type="password" name="password" required><br><br>

        <button type="submit" name="register">Register</button>
    </form>
</body>
</html>