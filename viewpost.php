<?php
include "db.php";

$result = mysqli_query($conn, "SELECT * FROM posts ORDER BY created_at DESC");
?>

<!DOCTYPE html>
<html>
<head>
    <title>All Blog Posts</title>
</head>
<body>
    <h2>Blog Posts</h2>

    <?php while ($row = mysqli_fetch_assoc($result)) { ?>
        <hr>
        <h3><?php echo $row['title']; ?></h3>
        <p><?php echo nl2br($row['content']); ?></p>
        <small><?php echo $row['created_at']; ?></small>
        <a href="edit_post.php?id=<?php echo $row['id']; ?>">Edit</a> |
         <a href="delete_post.php?id=<?php echo $row['id']; ?>">Delete</a>
    <?php } ?>
</body>
</html>