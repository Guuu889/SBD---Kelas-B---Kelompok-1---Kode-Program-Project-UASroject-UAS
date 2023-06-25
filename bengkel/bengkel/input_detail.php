<?php
include 'koneksi.php';

if (isset($_POST["submit"])) 
{
$id_detail=$_POST ["fid_detail"];
$kode_parts=$_POST ["fkode_parts"];
$kuantum=$_POST ["fkuantum"];
$discount=$_POST ["fdiscount"];

$query="INSERT INTO detail VALUES ('$id_detail','$kode_parts',' $kuantum','$discount')" ;
mysqli_query($conn,$query);
echo "
        <script>
            alert('Motor Berhasil Ditambahkan');
        </script>  
    ";
    header("Location: index.html");
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
                                    <h1>Form Detail</h1>
                                </div>
                            </tr>

                            <tr>
                                <td>Kode Parts</td>
                                <td align="center">:</td>
                                <td><input type="text" name="fkode_parts" required></td>
                            </tr>

                            <tr>
                                <td>Kuantum</td>
                                <td align="center">:</td>
                                <td><input type="text" name="fkuantum" required></td>
                            </tr>

                            <tr>
                                <td>Discount</td>
                                <td align="center">:</td>
                                <td><input type="text" name="fdiscount" required></td>
                            </tr>

                        </table>
                        <div class="no-faktur">


                            <button type="submit" class="btn btn-primary" name="submit">SIMPAN</button>
                            <a href="index.html" class="btn btn-primary">KEMBALI</a>
                        </div>
                </div>

            </div>





</html>