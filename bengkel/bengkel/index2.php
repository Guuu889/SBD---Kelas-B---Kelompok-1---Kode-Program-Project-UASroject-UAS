<?php
include_once("koneksi.php");
 
// Mengambil semua data dari database
// $result = mysqli_query($conn, "SELECT * FROM absensi ORDER BY id DESC");
 
// if (isset($_POST['Submit'])) {
//     // $_POST['no_faktur'];
    
    
//     $no_faktur = $_POST['no_faktur'];
//     $divisi = $_POST['divisi'];
//  $query = "SELECT * FROM faktur, mekanik, motor, parts WHERE faktur.no_faktur = $no_faktur;"

//  $result = mysqli_query($conn, $query);

// //     // // Insert data ke database
// //     // $add = mysqli_query($mysqli, "INSERT INTO absensi(nama,divisi,waktu_kehadiran) VALUES('$nama','$divisi', NOW())");
// }
?>
 
<html>
 
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
 
    <title>SERVICE SEPEDA MOTOR AHHAS</title>
</head>
 
<body>
    <nav class="navbar navbar-dark bg-dark">
        <div class="container-fluid">
            <span class="navbar-brand mb-0 h1">Service Sepeda Motor Ahhas</span>
        </div>
    </nav>

    <div class="bg-success p-2 text-dark bg-opacity-10">
        <h1 class="p-4 text-center">FAKTUR SERVICE</h1>
        <div class="container">
            <form action="tampil_data.php" method="post">
                <div class="col-md-6 offset-md-3">
                    <div class="mb-3">
                        <label class="form-label">No Faktur</label>
                        <input type="text" class="form-control" name="no_faktur" placeholder="Masukkan nomor faktur anda">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label"></label>
                        <!-- <select class="form-select" name="divisi">
                            <option value="#">-- Pilihan --</option>
                            <option value="motor">Motor</option>
                            <option value="mekanik">Mekanik</option>
                            <option value="parts">Parts</option>
							 <option value="detail">Detail Parts</option>
                        </select> -->
                    </div>
                </div>
                <div class="text-center"> 
                    
                        <button type="submit" class="btn btn-primary" name="Submit">Submit</button>
                </div>
            </form>
 
          
                </tr>
 
<!--                
                    <tr class="table-secondary">
                        <td>motor</td>
                        <td>mekanik</td>
                        <td>parts</td>
						<td>detail</td>
                    </tr> -->
       
            </table>
        </div>
    </div>
 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>