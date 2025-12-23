<?php
include "db.php";

$id = $_GET['id'];

if (isset($_POST['update'])) {
    $title = $_POST['title'];
    $content = $_POST['content'];

    $sql = "UPDATE posts SET title='$title', content='$content' WHERE id=$id";
    mysqli_query($conn, $sql);

    echo "Post updated successfully";
}

$result = mysqli_query($conn, "SELECT * FROM posts WHERE id=$id");
$post = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Post</title>
</head>
<body>
<h2>Edit Post</h2>

<form method="post">
    Title:<br>
    <input type="text" name="title" value="<?php echo $post['title']; ?>"><br><br>

    Content:<br>
    <textarea name="content"><?php echo $post['content']; ?></textarea><br><br>

    <button name="update">Update</button>
</form>
</body>
</html>