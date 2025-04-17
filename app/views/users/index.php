<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User List</title>
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>
    <div class="container">
        <h1>User List</h1>
        <a href="/users/create" class="btn">Create New User</a>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($users as $user): ?>
                    <tr>
                        <td><?php echo htmlspecialchars($user->id); ?></td>
                        <td><?php echo htmlspecialchars($user->name); ?></td>
                        <td><?php echo htmlspecialchars($user->email); ?></td>
                        <td>
                            <a href="/users/edit/<?php echo htmlspecialchars($user->id); ?>" class="btn">Edit</a>
                            <a href="/users/delete/<?php echo htmlspecialchars($user->id); ?>" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>
</html>