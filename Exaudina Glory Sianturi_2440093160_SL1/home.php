<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="home.css">
</head>
<body>
    <header>
        <div class="headline">Aplikasi Pengelola Keuangan</div>
        <div class="nav">
            <a href="home.php">Home</a>
            <a href="profile.php">Profile</a>
            <a href="logout.php">Logout</a>
        </div>
    </header>       
    <div class="content">
        <?php 
        session_start();
        echo "Halo ".$_SESSION['namaDepan']." ".$_SESSION['namaTengah']." ".$_SESSION['namaBelakang'].". Selamat Datang di Aplikasi Pengelola Keuangan" ?>
    </div>
</body>
</html>