<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title> Show new user </title>
    <link rel="stylesheet" href="/style.css">

</head>
<body>

<div>
    <table>
        <?php foreach ($users as $user): ?>
            <tr>
                <td>
                    <a href="/users/<?= $user->getId() ?>"> <?php print_r("{$user->getId()}. {$user->getName()} {$user->getEmail()} {$user->getGender()} {$user->getStatus()} ") ?> </a>
                </td>

                <td>
                    <a href='/users/<?php echo $user->getId(); ?>/edit'>Edit</a>
                </td>

                <td>
                    <form action="/users/remove/<?= $user->getId() ?>" method="post" onSubmit="return confirm('Are you sure you want delete data')">
                        <input type="hidden" name="id" value="<?= $user->getId() ?>">
                        <input type="submit" value="Remove">
                    </form>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
</div>

<br>

<div>
    <a href="users/new" class = 'button'> create new user </a>
</div>


</body>

</html>