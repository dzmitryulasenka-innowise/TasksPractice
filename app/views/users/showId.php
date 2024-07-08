<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title> Show new user </title>
    <link rel="stylesheet" href="../css/main.css">
</head>
<body>

<p>
    <?php print_r("{$user['id']}. {$user['name']} {$user['email']} {$user['gender']} {$user['status']} ") ?>
</p>

<div>
    <input type=button onClick="location.href='/'" value='Back'>
</div>


</body>

</html>