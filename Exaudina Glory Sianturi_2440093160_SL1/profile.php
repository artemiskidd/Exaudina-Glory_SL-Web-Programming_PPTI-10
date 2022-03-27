<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="profile.css">
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
        <div class="judul">Profil Pribadi</div>
        <?php
            session_start();
        ?>
        <table>
            <tr>
                <td>Nama Depan</td>
                <td>
                    <?php
                        echo $_SESSION['namaDepan'];
                    ?>
                </td>
                <td>Nama Tengah</td>
                <td>
                    <?php
                        echo $_SESSION['namaTengah'];
                    ?>
                </td>
                <td>Nama Belakang</td>
                <td>
                    <?php
                        echo $_SESSION['namaBelakang'];
                    ?>
                </td>
            </tr>
            <tr>
                <td>Tempat Lahir</td>
                <td>
                    <?php
                        echo $_SESSION['tempatLahir'];
                    ?>
                </td>
                <td>Tanggal Lahir</td>
                <td>
                <?php
                        echo $_SESSION['tanggalLahir'];
                    ?>
                </td>
                <td>NIK</td>
                <td>
                <?php
                        echo $_SESSION['NIK'];
                    ?>
                </td>
            </tr>
            <tr>
                <td>Warga Negara</td>
                <td>
                <?php
                        echo $_SESSION['wargaNegara'];
                    ?>
                </td>
                <td>Email</td>
                <td>
                <?php
                        echo $_SESSION['email'];
                    ?>
                </td>
                <td>No HP</td>
                <td>
                <?php
                        echo $_SESSION['noHp'];
                    ?>
                </td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>
                <?php
                        echo $_SESSION['alamat'];
                    ?>
                </td>
                <td>Kode Pos</td>
                <td>
                <?php
                        echo $_SESSION['kodePos'];
                    ?>
                </td>
                <td>Foto Profil</td>
                <td>
                    <img src="assets/profile.png">
                </td>
            </tr>
        </table>
        
    </div>
</body>
</html>