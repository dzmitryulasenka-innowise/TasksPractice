<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title> Show new user </title>
    <link rel="stylesheet" href="../css/main.css">
</head>
<body>

<p>
    <?php foreach ($data as $key => $value):
        print_r("{$key}:{$value}");
        echo "<br>";
    endforeach; ?>
</p>

</body>

</html>