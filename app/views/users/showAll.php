<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title> Show new user </title>
    <link rel="stylesheet" href="../css/main.css">
</head>
<body>

<div>
    <?php foreach ($users as $user): ?>
        <table>
            <tr>
                <td>
                    <a href="/users/<?= $user['id'] ?>"> <?php print_r("{$user['id']}. {$user['name']} {$user['email']} {$user['gender']} {$user['status']} ") ?> </a>
                </td>
                <td>

                <td>
                    <form action="/users/<?= $user['id'] ?>/edit" method="get">
                        <input type="hidden" name="id" value="<?= $user['id'] ?>">
                        <input type="submit" value="Edit">
                    </form>
                </td>
                <form action="/users/remove/<?= $user['id'] ?>" method="post">
                    <input type="hidden" name="id" value="<?= $user['id'] ?>">
                    <input type="submit" value="Remove">
                </form>
                </td>
            </tr>
        </table>
    <?php endforeach; ?>
</div>
<br>
<br>
<br>
<div>
    <input type=button onClick="parent.location='users/new'" value='Create new user'>
</div>

</body>

</html>