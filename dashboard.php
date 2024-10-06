<?php

    session_start();
    $submit_message = '';

    if(isset($_SESSION["is_submit"])) {
        header("location:logout.php");
    }

    if(isset($_POST['submit'])) {
        $nama = $_POST['nama'];
        $email = $_POST['email'];
        $komentar = $_POST['komentar'];


        if(empty($_POST["name"]) AND empty($_POST["email"]) AND empty($_POST["komentar"])) {
            $submit_message = "Data tidak boleh kosong";
             
        }else{ 
            
            $_SESSION['nama'] = $nama;
            $_SESSION['email'] = $email;
            $_SESSION['komentar'] = $komentar;
            header("location:logout.php");
            
        } 
        
    }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Buku Tamu</title>
</head>

<body>
    <div class="container">
        <form action="dashboard.php" method="POST">
            <h1>Buku Tamu</h1>
            <i><?= $submit_message ?></i>

            <div class="input-box">
                <input type="text" placeholder="nama" required name="nama" />
            </div>
            <div class="input-box">
                <input type="email" placeholder="email" required name="email" />
            </div>
            <div class="input-box">
                <input type="text" placeholder="komentar" required name="komentar" />
            </div>

            <button type=" submit" class="btn" name="submit">Submit</button>
        </form>
    </div>
</body>

</html>