<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        session_start();
    ?>
    <form action="./validate.php" method="post">
        <label for="user"></label>
        <input type="text" name="user" id="user">
        <label for="password"></label>
        <input type="password" name="password" id="password">
        <button type="submit" value="Log in"></button>
    </form>
    <?php
        print_r($_SESSION);
        if($_SESSION["login"]!=null && $_SESSION["login"]=="false"){
            echo '<p> The password is wrong </p>';
        }
    ?>
</body>
</html>