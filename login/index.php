<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="../img/icon.png">
    <link rel="stylesheet" href="../styles/login.css">
    <title>Login | Admin Panel</title>
</head>
<body>
<div class="wrapper">
    <div class="container">
        <img class="logo-in" src="../img/coc%20logo.png">
        <form action="check-login.php" class="form" method="post">
            <h2>Go to admin panel</h2>
            <div class="form_container">
                    <input type="text" name="login">
                    <input type="password" name="password">
                <button class="button">Login</button>
                <a href="../index.php" class="button">Home</a>
            </div>
        </form>
    </div>
</div>
</body>
</html>