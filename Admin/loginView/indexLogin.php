<?php
if ( isset($_POST['email'], $_POST['password']) ) {

    if($_POST['email'] == "admin@gmail.com")
    {
        if($_POST['password'] == "admin")
            header("Location: ../index.php");

        else
            echo '<script>alert("wrong email or password")</script>';
    }
    else
        echo '<script>alert("wrong email or password")</script>';

}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Login</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
    <link href="styleCss.css" rel="stylesheet" type="text/css">
</head>
<body>
<div class="login">
    <h1>Login</h1>
    <form method="post">
        <label for="email">
            <i class="fas fa-user"></i>
        </label>
        <input type="text" name="email" placeholder="email" id="email" required>
        <label for="password">
            <i class="fas fa-lock"></i>
        </label>
        <input type="password" name="password" placeholder="Password" id="password" required>
        <input type="submit" value="Login">
    </form>
</div>
</body>
</html>