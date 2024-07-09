<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title> New user create </title>
    <link rel="stylesheet" href="../../../public/style.css">
</head>
<body>

<div>
    <form action="/users" method="post">


        <label for="name">Name</label>
        <input type="text" id="name" placeholder="Your first and last name" name="name"
               value= <?php echo $user->getName() ?>>

        <br>

        <label for="email">Email</label>
        <input type="email" id="email" placeholder="Email" name="email"
               value= <?php echo $user->getEmail() ?>>

        <br>


        <label for="gender">Gender</label>
        <select name="gender">
            <?php foreach ($listsOfFieldsForChoose['gender'] as $gender): ?>
                <option value=<?php echo $gender ?> <?php if ($user->getGender() === $gender) echo "selected"; ?>><?php echo $gender ?></option>
            <?php endforeach; ?>
        </select>

        <br>

        <label for="status">Status</label>
        <select name="status">
            <?php foreach ($listsOfFieldsForChoose['status'] as $status): ?>
                <option value=<?php echo $status ?> <?php if ($user->getStatus() === $status) echo "selected"; ?>><?php echo $status ?></option>
            <?php endforeach; ?>
        </select>

        <br>

        <input type="submit" value="Save user">
    </form>

    <div>
        <p>
            <?php if (!empty($resultValidation)) { ?>
                <?php foreach ($resultValidation['errors'] as $key => $error) :
                    print_r($error);?>
                    <br>
                <?php endforeach; ?>
            <?php } ?>

        </p>
    </div>

</div>

</body>

</html>