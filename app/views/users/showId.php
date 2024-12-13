<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title> Show new user </title>
    <link rel="stylesheet" href="../../../public/style.css">
</head>
<body>

<p>
    <?php echo !empty($message) ? $message : ''?>
</p>



<p>
    <?php !empty($user) ? print_r("{$user->getId()} {$user->getName()} {$user->getEmail()} {$user->getGender()} {$user->getStatus()} ") : '' ?>
</p>

<div>
    <a href="/">Back</a>
</div>


</body>

</html>