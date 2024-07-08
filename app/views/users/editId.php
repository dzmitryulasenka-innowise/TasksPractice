<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title> Show new user </title>
    <link rel="stylesheet" href="../css/main.css">
</head>
<body>

<div>


    <form action="/users/<?php echo $user['id'] ?>/edit" method="post">

        <input type="hidden" name="id" value="<?php echo $user['id']; ?>">

        <label for="name">enter you name</label>
        <input type="text" id="name" name="name" value= <?php echo isset($user['name']) ? $user['name'] : "" ?>>

        <label for="email"></label>
        <input type="email" id="email" name="email" value= <?php echo isset($user['email']) ? $user['email'] : "" ?>>


        //все списки чего либо должны храниться отдельно - 1 источник
        <label for="gender"></label>
        <select name="gender">
            <option value="male" <?php if ($user["gender"] === "male") echo "selected"; ?>>male</option>
            <option value="female" <?php if ($user["gender"] !== "male") echo "selected"; ?>>female</option>
        </select>

        <label for="status"></label>
        <select name="status">
            <option value="active" <?php if ($user["status"] === "active") echo "selected"; ?>>Active user</option>
            <option value="inactive" <?php if ($user["status"] !== "active") echo "selected"; ?>>Inactive user
            </option>
        </select>

        <input type="submit" value="Save information">
    </form>


    <div>
        <p>
            <?php if ($errors) { ?>
                <?php foreach ($errors as $key => $error) :
                    print_r("Error in {$key}");
                endforeach; ?>
            <?php } ?>

        </p>
    </div>

</div>

</body>

</html>