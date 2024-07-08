<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title> Show new user </title>
    <link rel="stylesheet" href="../css/main.css">

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
                    <form action="/users/remove/<?= $user['id'] ?>" method="post" onSubmit="return confirm('Are you sure you want delete data')">
                        <input type="hidden" name="id" value="<?= $user['id'] ?>">
                        <input type="submit" value="Remove">
                    </form>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
</div>
<br>

//кнопки чтото отправлять всегда, а ссыли дял перенаправления
<div>
    <a href="users/new" class = 'button'> create new user </a>
</div>


</body>

</html>