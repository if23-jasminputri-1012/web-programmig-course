<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Buss Lightyear</title>
</head>
<body>
    <h1>Ini halaman login</h1>
    <form action="./backend/login.php" method="POST">
        <input type="email" name="email" id="email" placeholder="Email"/>
        <input type="password" name="password" id="password" placeholder="Password"/>
        <button type="submit">Login</button>
    </form>

    <?php

        if(isset($_POST['email']) || isset($_POST['password'])) {
            $email = $_POST['email'];
            $password = $_POST['password'];

        echo $email;
        }
    ?>
</body>
</html>