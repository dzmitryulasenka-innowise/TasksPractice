<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title> New user create </title>
    <link rel="stylesheet" href="../css/main.css">
</head>
<body>

<div>
    <form action="/public/users/create" method="post">
        <label for="email"></label>
        <input type="email" id="email" placeholder="Email" name="email">


        <label for="name"></label>
        <input type="text" id="name" placeholder="Your first and last name" name="name">

        <label for="name"></label>
        <select name="gender">
            <option value="male" selected>male</option>
            <option value="female">female</option>
        </select>

        <label for="status"></label>
        <select name="status">
            <option value="active">Active user</option>
            <option value="inactive" selected>Inactive user</option>
        </select>

        <input type="submit" value="Show information">
    </form>
</div>

</body>

</html>