<?php
include "koneksi.php";

$no_faktur = $_POST['no_faktur'];

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>


    <div>
        <h1 color="orange" size="3">Hasil Tampil Data</h1>
        <table width="100%" border="1px" align="center" cellpadding="0" cellspacing="0">
            <tr bgcolor="#FF6600">
                <th width="5">No</td>
                <th width="80" height="42">Tanggal</td>
                <th width="80" height="42">No Polisi</td>
                <th width="80" height="42">Merek Motor</td>
                <th width="80" height="42">Warna Motor</td>
                <th width="160">Nama Part</td>
                <th width="70">Kode Part</td>
                <th width="70">Nama Mekanik</td>
                <th width="70">Harga</td>
                <th width="70">Discount</td>
                <th width="70">Total</td>


            </tr>
            <?php
            $Cari = "SELECT * FROM detail, faktur, mekanik, motor, parts WHERE faktur.id_mekanik = mekanik.id_mekanik AND detail.id_detail = faktur.id_detail AND motor.no_polisi = faktur.no_polisi AND parts.kode_parts = detail.kode_parts AND faktur.no_faktur = '$no_faktur'";
            $Tampil = mysqli_query($conn, $Cari);
            $nomer = 0;
            while ($hasil = mysqli_fetch_array($Tampil)) {
                $tanggal = stripslashes($hasil['tanggal']);
                $no_polisi = stripslashes($hasil['no_polisi']);
                $merek = stripslashes($hasil['merek']);
                $warna = stripslashes($hasil['warna']);
                $nama_parts = stripslashes($hasil['nama_parts']);
                $kode_parts = stripslashes($hasil['kode_parts']);
                $nama_mekanik = stripslashes($hasil['nama_mekanik']);
                $harga = stripslashes($hasil['harga']);
                $discount = stripslashes($hasil['discount']);
                $Total = stripslashes($hasil['Total']);




                $nomer++;
                ?>
            <tr align="center" bgcolor="#DFE6EF">
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
            </tr>
            <tr align="center">
                <td height="32">
                    <?= $nomer ?>
                </td>
                <td>
                    <?= $tanggal ?>
                </td>
                <td>
                    <?= $no_polisi ?>
                </td>
                <td>
                    <?= $merek ?>
                </td>
                <td>
                    <?= $warna ?>
                </td>
                <td>
                    <?= $nama_parts ?>
                </td>
                <td>
                    <?= $kode_parts ?>
                </td>
                <td>
                    <?= $nama_mekanik ?>
                </td>
                <td>
                    <?= $harga ?>
                </td>
                <td>
                    <?= $discount ?>
                </td>
                <td>
                    <?= $Total ?>
                </td>

            </tr>
            <tr align="center" bgcolor="#DFE6EF">
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>

            </tr>
            <?php
            }
            ?>
        </table>
    </div>

</body>

</html>






<?php
if (isset($_POST["Submit"])) {
    $no_faktur = $_POST['no_faktur'];
    $tanggal = $_POST['tanggal'];
    $no_polisi = $_POST['no_polisi'];
    $id_mekanik = $_POST['id_mekanik'];
    $discount = $_POST['discount'];
    $id_detail = $_POST['id_detail'];

    $total = $_POST['total'];

    $query = "INSERT INTO faktur VALUES ('$no_faktur','$id_detail ','$tanggal','$no_polisi','$id_mekanik','$discount','$total')";
    mysqli_query($conn, $query);

    echo "
            <script>
                alert('Motor Berhasil Ditambahkan');
            </script>  
        ";
    header("Location: tampil_data.php?no_faktur=$no_faktur");
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
                                    <h1>Input Data Faktur</h1>
                                </div>
                            </tr>
                            <tr>
                                <td>No Faktur</td>
                                <td align="center">:</td>
                                <td><input type="text" name="no_faktur" required></td>
                            </tr>

                            <tr>
                                <td>Tanggal</td>
                                <td align="center">:</td>
                                <td><input type="date" name="tanggal" required></td>
                            </tr>

                            <tr>
                                <td>No Polisi</td>
                                <td align="center">:</td>
                                <td>
                                    <select name="no_polisi" id="">
                                        <option value="">SELECT No Polisi</option>
                                        <?php
                                        $motor = "SELECT * FROM motor";
                                        $hasil = mysqli_query($conn, $motor);
                                        while ($data = mysqli_fetch_array($hasil)) { ?>
                                        <option value="<?= $data["no_polisi"]; ?>"><?= $data["no_polisi"]; ?></option>
                                        <?php } ?>
                                    </select>
                                </td>
                            </tr>

                            <tr>
                                <td>Nama Mekanik</td>
                                <td align="center">:</td>
                                <td>
                                    <select name="id_mekanik" id="">
                                        <option value="">SELECT Mekanik</option>
                                        <?php
                                        $mekanik = "SELECT * FROM mekanik";
                                        $hasil = mysqli_query($conn, $mekanik);
                                        while ($data = mysqli_fetch_array($hasil)) { ?>
                                        <option value="<?= $data["id_mekanik"]; ?>"><?= $data["nama_mekanik"]; ?>
                                        </option>
                                        <?php } ?>
                                    </select>
                                </td>
                            </tr>

                            <tr>
                                <td>Detail</td>
                                <td align="center">:</td>
                                <td>
                                    <select name="id_detail" id="">
                                        <option value="">SELECT Detail</option>
                                        <?php
                                        $detail = "SELECT * FROM detail";
                                        $hasil = mysqli_query($conn, $detail);
                                        while ($data = mysqli_fetch_array($hasil)) { ?>
                                        <option value="<?= $data["id_detail"]; ?>">
                                            <?= $data['kode_parts']; ?>
                                        </option>
                                        <?php } ?>
                                    </select>
                                </td>
                            </tr>

                            <tr>
                                <td>Total</td>
                                <td align="center">:</td>
                                <td><input type="text" name="total" required></td>
                            </tr>
                        </table>
                        <div class="no-faktur">


                            <button type="submit" class="btn btn-primary" name="Submit">SIMPAN</button>
                            <a href="index.php" class="btn btn-primary">KEMBALI</a>
                        </div>
                    </form>
                </div>

            </div>
        </section>
    </body>

</html>