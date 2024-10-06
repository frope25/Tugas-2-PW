<?php
    session_start();
    $login_message = '';

    if(isset($_SESSION["is_login"])) {
        header("location:dashboard.php");
    }

    if(isset($_POST['login'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        if($password=="admin" AND $username=="admin") {
            $_SESSION["username"]=$username;
            $_SESSION['is_login'] = true; 
            header("location:logoutAdmin.php");
        }elseif($password=="user" AND $username=="user") {
            $_SESSION["username"]=$username;
            $_SESSION['is_login'] = true; 
            header("location:dashboard.php");
        }else{ 
            $login_message = "Username atau Password salah";
        } 
        
    }

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Login Page</title>
</head>

<body>
    <div class="container">


        <form action="index.php" method="POST">
            <h1>Login</h1>
            <br>
            <i><?= $login_message ?></i>

            <div class=" input-box">
                <input type="text" placeholder="username" required name="username" />
            </div>
            <div class="input-box">
                <input type="password" placeholder="password" required name="password" />
            </div>

            <button type=" submit" class="btn" name="login">Login</button>
        </form>
    </div>
</body>

</html>