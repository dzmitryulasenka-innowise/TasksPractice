<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title> Show new user </title>
    <link rel="stylesheet" href="../css/main.css">
    <script src="../../../public/script.js"></script>
</head>
<body>

<div>
    <table>
        <?php foreach ($users as $user): ?>
            <tr>
                <td>
                    <a href="/users/<?= $user['id'] ?>"> <?php print_r("{$user['id']}. {$user['name']} {$user['email']} {$user['gender']} {$user['status']} ") ?> </a>
                </td>

                <td>
                    <button onclick="window.location.href = '/users/<?php echo $user['id']; ?>/edit'">Edit</button>
                </td>

                <td>
                    <form action="/users/remove/<?= $user['id'] ?>" method="post">
                        <input type="hidden" name="id" value="<?= $user['id'] ?>">
                        <input type="submit" value="Remove">
                    </form>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
</div>
<br>
<div>
    <input type=button onClick="location.href='users/new'" value='Create new user'>
</div>

</body>

</html>