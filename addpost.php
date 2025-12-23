<?php
include "db.php";

if (!isset($_SESSION['username'])) {
    die("Please login first");
}

if (isset($_POST['add'])) {
    $title = $_POST['title'];
    $content = $_POST['content'];

    $sql = "INSERT INTO posts (title, content) VALUES ('$title', '$content')";
    mysqli_query($conn, $sql);

    echo "Post added successfully";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Add Post</title>
</head>
<body>
    <h2>Add Blog Post</h2>

    <form method="post">
        Title: <br>
        <input type="text" name="title" required><br><br>

        Content: <br>
        <textarea name="content" rows="5" cols="30" required></textarea><br><br>

        <button type="submit" name="add">Add Post</button>
    </form>
</body>
</html>