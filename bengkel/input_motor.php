<?php
include 'koneksi.php';

if (isset($_POST["submit"])) {
    $no_polisi = $_POST["no_polisi"];
    $warna = $_POST["warna"];
    $merek = $_POST["merek"];

    $query = "INSERT INTO motor VALUES ('$no_polisi','$warna','$merek')";
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
                                    <h1>Input Data Motor</h1>
                                </div>
                            </tr>
                            <tr>
                                <td>No Polisi</td>
                                <td align="center">:</td>
                                <td><input type="text" name="no_polisi" require></td>
                            </tr>

                            <tr>
                                <td>Warna</td>
                                <td align="center">:</td>
                                <td><input type="text" name="warna" require></td>
                            </tr>

                            <tr>
                                <td>Merek</td>
                                <td align="center">:</td>
                                <td><input type="text" name="merek" require></td>
                            </tr>


                        </table>
                        <div class="no-faktur">


                            <button type="submit" name="submit" class="btn btn-primary">SIMPAN</button>
                            <a href="index.php" class="btn btn-primary">BATAL</a>


                        </div>
                </div>

            </div>
        </section>
    </body>

</html>