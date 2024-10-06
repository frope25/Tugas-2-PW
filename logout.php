<?php
    session_start();
    if(isset($_POST['logout'])) {
        session_unset();
        session_destroy();
        header("location: index.php");
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Logout Page</title>
</head>

<body>
    <div class="container">
        <form action="logout.php" method="POST">
            <h1>Terimakasih <?php echo $_SESSION['nama'] ?></h1>

            <button type="submit" class="btn" name="logout">Logout</button>
        </form>
    </div>
</body>

</html>