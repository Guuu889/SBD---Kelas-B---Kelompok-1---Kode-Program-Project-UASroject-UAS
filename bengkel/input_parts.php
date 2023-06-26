<?php
include 'koneksi.php';

if (isset($_POST["submit"])) {
    $kode_parts = $_POST["kode_parts"];
    $nama_parts = $_POST["nama_parts"];
    $harga = $_POST["harga"];




    $query = "INSERT INTO parts VALUES ('$kode_parts','$nama_parts','$harga')";
    mysqli_query($conn, $query);
    echo "
        <script>
            alert('Motor Berhasil Ditambahkan');
            document.location.href = 'index.php';
        </script>  
    ";
}
?>

<html>

<body>

    <header class="header">
        <a href="#" class="logo"> </i> AHHAS MOTOR SERVICE</a>

        <nav class="navbar">
            <div id="close-navbar" class="fas fa-times"></div>
            <a href="#">home</a>
            <a href="#about">about</a>
            <a href="#menu">service</a>

        </nav>

        <div class="icons">
            <div id="menu-btn" class="fas fa-bars"></div>
        </div>

    </header>

    <head>
        <title>FORM INPUT DETAIL PARTS</title>
        <link rel="stylesheet" href="css/style.css">
    </head>

    <body>
        <section class="menu" id="menu">

            <h1 class="heading">CEK SERVICE</h1>

            <div class="box-container">

                <div class="container">
                    <form action="" method="post">


                        <table>
                            <tr>
                                <div class="label-faktur">
                                    <h1>Input Data Parts</h1>
                                </div>
                            </tr>
                            <tr>
                                <td>Kode Parts</td>
                                <td align="center">:</td>
                                <td><input type="text" name="kode_parts" required></td>
                            </tr>

                            <tr>
                                <td>Nama Parts</td>
                                <td align="center">:</td>
                                <td><input type="text" name="nama_parts" required></td>
                            </tr>

                            <tr>
                                <td>Harga</td>
                                <td align="center">:</td>
                                <td><input type="text" name="harga" required></td>
                            </tr>

                        </table>
                        <div class="no-faktur">


                            <button type="submit" class="btn btn-primary" name="submit">SIMPAN</button>
                            <a href="index.php" class="btn btn-primary">KEMBALI</a>
                        </div>
                </div>

            </div>



</html>