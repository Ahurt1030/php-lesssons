<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users and Posts</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 8px;
            text-align: left;
        }
    </style>
</head>
<body>
    <h1>Users and Posts</h1>

    <!-- Display Users -->
    <h2>Users</h2>
    <table>
        <tr>
            <th>ID</th>
            <th>Username</th>
            <th>Password</th>
        </tr>
        <?php while ($user = $users_result->fetch_assoc()): ?>
            <tr>
                <td><?php echo $user['id']; ?></td>
                <td><?php echo $user['username']; ?></td>
                <td><?php echo $user['password']; ?></td>
            </tr>
        <?php endwhile; ?>
    </table>

    <!-- Display Posts -->
    <h2>Posts</h2>
    <table>
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Description</th>
            <th>Username</th>
        </tr>
        <?php while ($post = $posts_result->fetch_assoc()): ?>
            <tr>
                <td><?php echo $post['id']; ?></td>
                <td><?php echo $post['title']; ?></td>
                <td><?php echo $post['description']; ?></td>
                <td><?php echo $post['username']; ?></td>
            </tr>
        <?php endwhile; ?>
    </table>

</body>
</html>

<?php
// Close the database connection
$conn->close();
?>