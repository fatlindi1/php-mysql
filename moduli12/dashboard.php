<?php include 'db.php'; ?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
    <style>
        body {
            font-family: Arial;
            background: #eef1f5;
        }
        .container {
            width: 80%;
            margin: 50px auto;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            background: white;
            box-shadow: 0 0 10px #ccc;
        }
        th, td {
            padding: 12px;
            border-bottom: 1px solid #ddd;
            text-align: center;
        }
        th {
            background: #4CAF50;
            color: white;
        }
        a {
            padding: 6px 10px;
            text-decoration: none;
            color: white;
            border-radius: 5px;
        }
        .edit {
            background: #2196F3;
        }
        .delete {
            background: #f44336;
        }
        .top-btn {
            display: inline-block;
            margin-bottom: 10px;
            background: #4CAF50;
        }
    </style>
</head>
<body>

<div class="container">
    <a class="top-btn" href="signup.php">+ Add User</a>

    <table>
        <tr>
            <th>ID</th>
            <th>Username</th>
            <th>Actions</th>
        </tr>

        <?php
        $result = $conn->query("SELECT * FROM users");

        while ($row = $result->fetch_assoc()) {
            echo "<tr>
                <td>{$row['id']}</td>
                <td>{$row['username']}</td>
                <td>
                    <a class='edit' href='edit.php?id={$row['id']}'>Edit</a>
                    <a class='delete' href='delete.php?id={$row['id']}'>Delete</a>
                </td>
            </tr>";
        }
        ?>
    </table>
</div>

</body>
</html>