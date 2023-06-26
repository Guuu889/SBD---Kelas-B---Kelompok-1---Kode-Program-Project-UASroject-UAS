<?php
include 'koneksi.php';

if (isset($_POST["submit"])) {
    $no_faktur=$_POST ["no_faktur"];

    $query="SELECT faktur WHERE no_faktur = '$no_faktur" ;
    mysqli_query($conn,$query);
    // echo "
    //         <script>
    //             alert('Motor Berhasil Ditambahkan');
    //         </script>  
    //     ";
        header("Location: tampil_data.php");

}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AHHAS SERVICE</title>
    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- Custom CSS Link -->
    <link rel="stylesheet" href="css/style.css">

</head>

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
    <!--  header -->

    <!-- Home -->

    <section class="home" id="home">

        <div class="content">
            <h3>AHHAS <br> MOTOR SERVICE </h3>
            <a href="#menu" class="btn">Click Now</a>
        </div>

    </section>

    <!-- home -->

    <!-- About us -->

    <h1 class="heading">about us</h1>

    <section class="about" id="about">

        <div class="row">

            <div class="image">
                <img src="image/ahas1.jpg" alt="about">
            </div>

            <div class="content">
                <h3>Astra Honda Motor?</h3>
                <div class="line"></div>
                <p>Sepeda motor kini bukan hanya menjadi sarana transportasi produktif bagi masyarakat Indonesia. Sepeda
                    motor sudah menjadi bagian dari hobi dan gaya hidup, bahkan bisa mengantarkan pada prestasi tertentu
                    yang membanggakan. Untuk menemani
                    masyarakat beraktivitas dan menggapai beragam mimpinya, PT Astra Honda Motor menghadirkan solusi
                    mobilitas bagi masyarakat dengan produk dan layanan terbaik. Sejak pertama kali hadir di Indonesia,
                    sepeda motor Honda selalu dicintai
                    dan dipercaya menjadi partner berkendara masyarakat. Berbekal kepercayaan ini, PT Astra Honda Motor
                    secara konsisten melakukan inovasi pada produk dan teknologinya, terus meningkatkan layanan di
                    jaringan penjualan dan purna jual Honda,
                    serta intens beraktivitas dan berkomunikasi dengan masyarakat melalui berbagai platform.!</p>
            </div>

        </div>

    </section>

    <!-- end -->

    <!-- Menu -->

    <section class="menu" id="menu">

        <h1 class="heading">CEK SERVICE</h1>

        <div class="box-container">

            <div class="container">
                <form action="tampil_data.php" method="post">
                    <div class="label-faktur">
                        <label class="form-label">No Faktur</label>
                    </div>

                    <div class="no-faktur">

                        <input type="text" class="form-control" name="no_faktur"
                            placeholder="Masukkan nomor faktur anda">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label"></label>

                    </div>

                    <div class="text-center">

                        <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                    </div>
                </form>


            </div>

        </div>



        </div>

    </section>

    <P align="center"> JIKA BELUM MEMILIKI DATA SERVICE, SILAKAN MASUKAN DATA SERVICE TERLEBIH DAHULU</P>

    <section class="menu" id="menu">

        <h1 class="heading">INPUTAN DATA MOTOR</h1>

        <div class="box-container">

            <div class="container">
                <form action="input_motor.php" method="post">
                    <div class="label-faktur">
                        <label class="form-label">INPUT DATA MOTOR</label>
                    </div>

                    <div class="no-faktur">

                        >
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label"></label>

                    </div>

                    <div class="text-center">

                        <button type="submit" class="btn btn-primary" name="Submit">Submit</button>
                    </div>
                </form>


            </div>

        </div>



        </div>

    </section>
    <section class="menu" id="menu">
        <h1 class="heading">INPUTAN DATA MEKANIK</h1>

        <div class="box-container">

            <div class="container">
                <form action="input_mekanik.php" method="post">
                    <div class="label-faktur">
                        <label class="form-label">INPUT DATA MEKANIK</label>
                    </div>

                    <div class="no-faktur">

                        >
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label"></label>

                    </div>

                    <div class="text-center">

                        <button type="submit" class="btn btn-primary" name="Submit">Submit</button>
                    </div>
                </form>


            </div>

        </div>



        </div>

    </section>
    <section class="menu" id="menu">

        <h1 class="heading">INPUTAN DATA PARTS</h1>

        <div class="box-container">

            <div class="container">
                <form action="input_parts.php" method="post">
                    <div class="label-faktur">
                        <label class="form-label">INPUT DATA PARTS</label>
                    </div>

                    <div class="no-faktur">

                        >
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label"></label>

                    </div>

                    <div class="text-center">

                        <button type="submit" class="btn btn-primary" name="Submit">Submit</button>
                    </div>
                </form>


            </div>

        </div>



        </div>

    </section>
    <section class="menu" id="menu">
        <h1 class="heading">INPUTAN DETAIL PARTS</h1>

        <div class="box-container">

            <div class="container">
                <form action="input_detail.php" method="post">
                    <div class="label-faktur">
                        <label class="form-label">INPUT DETAIL PARTS</label>
                    </div>

                    <div class="no-faktur">

                        >
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label"></label>

                    </div>

                    <div class="text-center">

                        <button type="submit" class="btn btn-primary" name="Submit">Submit</button>
                    </div>
                </form>


            </div>

        </div>



        </div>

    </section>


    <!-- end -->



    <!-- End -->

    <!-- Footer -->

    <section class="footer">

        <div class="box-container">

            <div class="box">
                <img src="image/footer-1.png" alt="">
                <h3>address</h3>
                <p>Jl. Gajah Mada No.32, Kp. Olo, Kec. Nanggalo, Kota Padang, Sumatera Barat 25173</p>

            </div>

            <div class="box">
                <img src="image/footer-2.png" alt="">
                <h3>E-mail</h3>
                <a href="#" class="link">customercare@astrahonda.com</a>


            </div>

            <div class="box">
                <img src="image/footer-3.png" alt="">
                <h3>Call us</h3>
                <p>1-500-989</p>
            </div>

            <div class="box">
                <img src="image/footer-4.png" alt="">
                <h3>Opening hours</h3>
                <p>Monday - Friday: 08:00 - 16:00
                    <br> Saturday: 08:00 - 15:00
                </p>
            </div>

        </div>

        <div class="credit">created by <span>Kelompok 1</span> | all rights reserved! </div>

    </section>









    <!-- Custom JS Link -->
    <script src="js/script.js"></script>
</body>

</html>