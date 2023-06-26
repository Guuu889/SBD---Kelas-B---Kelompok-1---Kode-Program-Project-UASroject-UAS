<?php
include 'koneksi.php';

if (isset($_POST["submit"])) {
    $kode_parts = $_POST["kode_parts"];
    $kuantum = $_POST["kuantum"];
    $discount = $_POST["discount"];



    $query = "INSERT INTO detail VALUES ('$kode_parts', $kuantum, $discount)";
    mysqli_query($conn, $query);
    echo "
        <script>
            alert('Detail Berhasil Ditambahkan');

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
                                    <h1>Input Data Detail</h1>
                                </div>
                            </tr>
                            <tr>
                                <td>Kode Parts</td>
                                <td align="center">:</td>
                                <td><input type="text" name="kode_parts" required></td>
                            </tr>

                            <tr>
                                <td>Kuantum</td>
                                <td align="center">:</td>
                                <td><input type="text" name="kuantum" required></td>
                            </tr>
                            <tr>
                                <td>discount</td>
                                <td align="center">:</td>
                                <td><input type="text" name="discount" required></td>
                            </tr>


                        </table>
                        <div class="no-faktur">


                            <button type="submit" class="btn btn-primary" name="submit">SIMPAN</button>
                            <a href="index.php" class="btn btn-primary">KEMBALI</a>
                        </div>
                </div>

            </div>





</html>